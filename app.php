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
    
    public function regist() {
        $this->hookRegist(array(
            'user.commonJs.insert' => 'D3ModelViewerPlugin.echoJs'
        ));
    }
    
    public function echoJs() {
        //if ($this->isFileExtence($st, $act)) {
            $this->echoFile('static/main.js');
        //}
    }
    
    public function index() {
		$path = $this->filePath($this->in['path']);
        $fileUrl  = $this->filePathLink($this->in['path']) . '&name=/' . $this->in['name'];
		$fileName = $this->in['name'];
        include($this->pluginPath . 'static/page.html');
    }
}