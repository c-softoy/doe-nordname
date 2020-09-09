<?php


namespace ModulesGarden\DomainOrdersExtended\App\Cron\WithoutThread\DemonTask\Lookups;

use ModulesGarden\DomainOrdersExtended\App\Helper\PremiumDomains\CurrenciesHelper;
use ModulesGarden\DomainOrdersExtended\App\Libs\Api\Nordname\AvailableExtensions;
use ModulesGarden\DomainOrdersExtended\App\Models\Doe\DemonTask;

/**
 * Class Nordname
 * @package ModulesGarden\DomainOrdersExtended\App\Cron\WithoutThread\DemonTask\Lookups
 */
class Nordname extends AbstractLookup
{

    /**
     * @var AvailableExtensions
     */
    protected $availableExtensions;

    /**
     * @var DemonTask
     */
    protected $demonTask;

    protected $currenciesHelper = null;

    /**
     * Nordname constructor.
     * @param AvailableExtensions $availableExtensions
     * @param DemonTask $demonTask
     */
    public function __construct(
        AvailableExtensions $availableExtensions, DemonTask $demonTask
    )
    {
        $this->availableExtensions = $availableExtensions;
        $this->demonTask           = $demonTask;
        $this->currenciesHelper   = CurrenciesHelper::getInstance();
    }

    /**
     * @return string
     */
    public function getSubmoduleName()
    {
        return 'Nordname';
    }

    /**
     * @return bool
     */
    public function check()
    {
        if (empty($this->data))
        {
            return true;
        }

        if(count($this->data) > 1)
        {
            $records = $this->searchMany();
        }
        else
        {
            $records = $this->searchOne();
        }


        foreach ($this->data as $record)
        {
            //$this->updateDemonTask($record['id'], 'taken', '');
            foreach ($records as $key => $responseData)
            {
                
                if ($record['sld'] == $responseData['sld'] && $record['tld'] == $responseData['tld'])
                {
                    $this->updateDemonTask($record['id'], $responseData['status'], $this->parsePremiumPricing((int)$record['currency_id'], $responseData['premiumPricing']));
                    unset($records[$key]);
                    break;
                }
            }
        }

    }

    /**
     * @param $id
     * @param $status
     * @param $premiumPricing
     */
    protected function updateDemonTask($id, $status, $premiumPricing)
    {
        $this->demonTask
            ->where('id', 'LIKE', $id)
            ->update(
                [
                    'domain_status'   => $status,
                    'status'          => 'ready',
                    'premium_pricing' => is_string($premiumPricing) ? $premiumPricing : ''
                ]
            );
    }
    
    public function call($getfields) {
        $url = 'https://api.c-soft.net/api/v1.2/domain/checkRegistrationAvailability';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . "?" . http_build_query($getfields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 360);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Module-Name: DOE'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new \Exception('Connection Error: ' . curl_errno($ch) . ' - ' . curl_error($ch));
        }
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $this->results = json_decode($response, true);

        if ($this->results === null && json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Bad response received from API');
        }
      
        if ($httpcode != 200 && $httpcode != 201 && $httpcode != 202) {
          throw new \Exception('Registrar API Error: ' . $this->results["detail"]);
        }

        return $this->results;
    }

    protected function parsePremiumPricing($currencyId = null, $premiumPricing = null)
    {
        $parsed = [];

        // parse premium pricing

        return json_encode($parsed);
    }


    protected function searchOne()
    {
        return $this->searchMany();
    }


    protected function searchMany()
    {
        $domains = implode(',', array_map(function ($entry) { return $entry["sld"] . $entry["tld"]; }, $this->data));
        $results = $this->call(array("domain" => $domains, "api_key" => $this->settings["apiKey"]));
        $arr = array();
        foreach ($this->data as $k) {
            if ($results[$k["sld"] . $k["tld"]]["avail"] && !$results[$k["sld"] . $k["tld"]]["is_premium"]) {
                $arr[] = array("sld" => $k["sld"], "tld" => $k["tld"], "status" => "free", "premiumPricing" => null);
            } else {
                $arr[] = array("sld" => $k["sld"], "tld" => $k["tld"], "status" => "taken", "premiumPricing" => null);
            }
        }
        return $arr;
    }


}