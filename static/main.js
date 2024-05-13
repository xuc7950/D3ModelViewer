kodReady.push(function() {
    Events.bind('explorer.kodApp.before', function(appList) {
        appList.push({
            name: "D3ModelViewer",
            title: "{{LNG['D3ModelViewer.meta.name']}}",
            icon: '{{pluginHost}}static/images/icon.png',
            ext: "{{config.fileExt}}",
            sort: "{{config.fileSort}}",
            callback: function(path, ext) {
                core.openFile('{{pluginApi}}', "{{config.openWith}}", _.toArray(arguments));
            }
        });
    });
});