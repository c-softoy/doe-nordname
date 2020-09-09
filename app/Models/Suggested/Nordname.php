<?php


namespace ModulesGarden\DomainOrdersExtended\App\Models\Suggested;


use ModulesGarden\DomainOrdersExtended\App\Models\Doe\SubmoduleSettings;

class Nordname extends AbstractLookup
{
    /**
     * @var SubmoduleSettings
     */
    protected $submoduleSettings;

    /**
     * @var array
     */
    protected $settingsData = [];

    public function __construct(SubmoduleSettings $submoduleSettings) {
        $this->submoduleSettings = $submoduleSettings;
        $this->loadSettings();
    }


    public function execute()
    {
        return $this->getSuggestions();
    }

    protected function getSuggestions()
    {

    }

    protected function loadSettings()
    {
        $records = $this->submoduleSettings->where('submodule', 'LIKE', 'Nordname')->get()->toArray();
        foreach ($records as $record)
        {
            $this->settingsData[$record['setting']] = $record['value'];
        }
        return $this;
    }

}