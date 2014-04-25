define(['jquery'], function($){
    return {"common": {
        "bdMini": 3,
        "bdPopupOffsetTop": 0,
        "onBeforeClick": function(cmd, config) {
            if( _bd_share_config.shareConfig ) {
                return $.extend(config, _bd_share_config.shareConfig);
            }
            
        }
    }, "share": [
        {
            "bdSize": 24
        }
    ], "slide": [
        {
            "bdImg": 5,
            "bdPos": "right",
            "bdTop": 100
        }
    ], "image": [
        {
            "viewType": "list",
            "viewPos": "top",
            "viewColor": "black",
            "viewSize": "16",
            "viewList": ["weixin", "tsina", "tqq", "qzone", "tqf", "sqq", "renren", "baidu"]
        }
    ], "selectShare": [
        {
            "bdSelectMiniList": ["weixin", "tsina", "tqq", "qzone", "tqf", "sqq", "renren", "baidu"]
        }
    ]}

});


