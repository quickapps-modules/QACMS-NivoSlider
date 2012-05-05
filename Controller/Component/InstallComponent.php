<?php
class InstallComponent extends Component {
    public function beforeInstall() {
        return true;
    }

    public function afterInstall() {
        // add slider settings
        ClassRegistry::init('Module')->save(
            array(
                'Module' => array(
                    'name' => 'NivoSlider',
                    'settings' => array(
                        'slider_folder' => 'nivo_slider_images'
                    )
                )
            )
        );

        $Folder = new Folder(ROOT . DS . 'webroot' . DS . 'files' . DS . 'nivo_slider_images' . DS, true);
        $block = array(
            'Block' => array(
                'module' => 'NivoSlider',
                'delta' => 'nivo_slider',
                'themes_cache' => '',
                'ordering' => 1,
                'status' => 1,
                'visibility' => 1,
                'pages' => '',
                'title' => 'Nivo Slider',
                'locale' => null,
                'settings' => array(
                    'images' => array()
                )
            )
        );

        ClassRegistry::init('Block.Block')->save($block, false);
    }

    public function beforeUninstall() {
        return true;
    }

    public function afterUninstall() {
        return true;
    }
}