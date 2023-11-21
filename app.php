<?php
/**
 * D3模型查看器
 * D3ModelViewer
 * 
 * @author Chao
 * @website http://xuc7950.top
 * @qq: 1099460165
 * 
 * 本插件基于以下开源项目：
 * - Three.js                 https://github.com/mrdoob/three.js
 */

class D3ModelViewerPlugin extends PluginBase {
    function __construct() {
        parent::__construct();
    }
    
    public function regiest() {
        $this->hookRegiest(array(
            'user.commonJs.insert' => 'D3ModelViewerPlugin.echoJs'
        ));
    }
    
    public function echoJs($st, $act) {
        if ($this->isFileExtence($st, $act)) {
            $this->echoFile('static/main.js');
        }
    }
    
    public function index() {
        $path = _DIR($this->in['path']);
        $fileUrl  = _make_file_proxy($path);
        $fileName = get_path_this(rawurldecode($this->in['path']));
        $fileName = htmlspecialchars($fileName);
        include($this->pluginPath . 'static/page.html');
    }
}