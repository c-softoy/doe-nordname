<?php

namespace ModulesGarden\DomainOrdersExtended\App\UI\DoeSubmoduleSettings\Pages;

use \ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Forms\BaseStandaloneFormExtSections;
use \ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Forms\Fields\Switcher;
use \ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Forms\Sections;
use \ModulesGarden\DomainOrdersExtended\Core\UI\Widget\Others\ModuleDescription;
use \ModulesGarden\DomainOrdersExtended\Core\UI\Interfaces\AdminArea;

use ModulesGarden\DomainOrdersExtended\App\UI\DoeSubmoduleSettings\Providers\DoeSubmoduleSettingsDataProvider;
use ModulesGarden\DomainOrdersExtended\App\UI\DoeSubmoduleSettings\Others\DoeSubmoduleDescription;
use ModulesGarden\DomainOrdersExtended\App\UI\DoeSubmoduleSettings\Submodules;

/**
 * Main Container for DOE Submodule Settings page
 *
 * @author Sławomir Miśkowicz <slawomir@modulesgarden.com>
 */
class DoeSubmoduleSettings extends BaseStandaloneFormExtSections implements AdminArea
{
    protected $id    = 'doeSubmoduleSettings';
    protected $name  = 'doeSubmoduleSettings';
    protected $title = 'doeSubmoduleSettings';

    public function initContent()
    {
        $this->setProvider((new DoeSubmoduleSettingsDataProvider())->setSubmodules($this->getSubmodules()));

        $this->loadSections();
        
        $this->loadDataToForm();
    }

    protected function loadSections()
    {
        foreach ($this->getSubmodules() as $submodule)
        {
            $this->createSection($submodule);
        }
    }

    protected function createSection($submodule)
    {
        $section = new Sections\BoxSection();
        $section->initIds($submodule->getSubmoduleName());

        $section->enableGroupBySectionName();

        $enableSection = new Switcher();
        $enableSection->initIds('enableSubmodule')->setLabelWidth(3)->setWidth(4);

        if($submodule->getSubmoduleName() === 'DefaultSubmodule')
        {
            $enableSection->disableField();
            $desc = new ModuleDescription();
            $desc->initIds('sectionDescription');
            $section->setMainContainer($this->mainContainer);
            $section->addElement($desc);
        }
        else
        {
            $desc = new DoeSubmoduleDescription();
            $desc->initIds('sectionDescription');
            $desc->setName('sectionDescription_' . $submodule->getSubmoduleName());
            $desc->setTldList($this->dataProvider->getValueById('tldList'.$submodule->getSubmoduleName()));
            $section->setMainContainer($this->mainContainer);
            $section->addElement($desc);      
        }
        
        $section->addField($enableSection);
        
        foreach ($submodule->getFieldsList() as $field)
        {
            $section->addField($field);
        }

        $this->addSection($section);
    }

    protected function getSubmodules()
    {
        return [
            new Submodules\DefaultSubmodule(),
            new Submodules\NordnameSubmodule(),
            new Submodules\OpenSRSSubmodule(),
            new Submodules\ENomSubmodule(),
            new Submodules\HexonetSubmodule(),
            new Submodules\ResellerClubSubmodule(),
            new Submodules\ResellerCampSubmodule(),
            new Submodules\NetearthoneSubmodule()
        ];
    }
}
