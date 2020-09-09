<?php


namespace ModulesGarden\DomainOrdersExtended\App\UI\DoeSubmoduleSettings\Submodules;


use ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Forms\Fields\Select2vueByValueOnly;
use ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Forms\Fields\Text;
use \ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Forms\Fields\Switcher;

class NordnameSubmodule extends BaseSubmoduleHelper
{
    protected $name = 'Nordname';

    public function initFields()
    {
        //exampleField1
        $exampleField1 = new Text();
        $exampleField1->initIds('apiKey')->setLabelWidth(3)->setWidth(4)->setDescription('API key');
        $this->fieldsList[] = $exampleField1;

        //exampleField3
        //$exampleField3 = new Text();
        //$exampleField3->initIds('exampleField3')->setLabelWidth(3)->setWidth(4)->setDescription('description')->setPlaceholder('exampleHost.net');
        //$this->fieldsList[] = $exampleField3;

        //disabled TLDs
        //$disabledTlds       = new Select2vueByValueOnly();
        //$disabledTlds->initIds('disabledTlds')->setLabelWidth(3)->setWidth(4)->setDescription('description')->enableMultiple();
        //$this->fieldsList[] = $disabledTlds;

    }
}