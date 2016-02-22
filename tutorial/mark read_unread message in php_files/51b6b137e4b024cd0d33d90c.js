(function () {
    _(
        {"status":{"code":"OK"},"jsVersion":"16.06.250","id":"5559fdd5e4b0edc24491424d","bid":{"id":"5559ee48e4b0c96a358f6196","videos":[{"videoId":"56c51485e4b04edee8bdf92c","name":"Remembering the hot mobile gear of five years ago","videoUrls":["http://videos.vidible.tv/prod/2016-02/18/56c51485e4b04edee8bdf92c_480x270_v1.mp4?Hgk2oWVCqZsnXWRzQOICbFyIi4zB8VQM1edBMF-2QMGoVdBR8fnoKMMPBRhYI8OM","http://videos.vidible.tv/prod/2016-02/18/56c51485e4b04edee8bdf92c_480x270_v1.ogg?1_QVMl2mgOr-dxI6H7KzPp6EC1NiRO7qguvcIOevhaV9DOozTGiryoUYycu4EYyw"],"thumbnailId":"56c51540e4b08c71d1e9a898","thumbnail":"http://cdn.vidible.tv/prod/2016-02/18/56c51485e4b04edee8bdf92c_60x60_F_v1.png","fullsizeThumbnail":"http://cdn.vidible.tv/prod/2016-02/18/56c51485e4b04edee8bdf92c_o_F_v1.png","subtitles":[],"captions":{},"metadata":{"duration":85162,"keywords":["MWC 2016","idg"],"commonRating":{"value":"G","descriptors":[],"minAge":0}},"videoSourceType":"FILE","rssVideoId":"urn:uuid:com.idgcsmb.media.62263","studioName":"IDG","cs":{"p":false}}]},"playerTemplate":{"initialization":"autoplay","sound":"normal","initialVolume":1.0,"videosToPlay":1,"videosToRequest":1,"shuffleVideos":false,"prerollFrequency":0,"backgroundSkinLocation":{"x":0,"y":0,"w":0,"h":0},"controlsSkin":"http://cdn.vidible.tv/prod/player/swf/16.06.184/Controls16_2.swf","controlsSkinLocation":{"x":0,"y":263,"w":400,"h":0},"videoLocation":{"x":0,"y":0,"w":400,"h":300},"afterVideosUI":"next","scrubBarSkin":"http://cdn.vidible.tv/prod/2013-03/10/511e8160e4b0bf40bd0340a7_v2.swf","coveringsSkin":"http://cdn.vidible.tv/prod/player/swf/16.06.184/Coverings.swf","coveringsSkinLocation":{"x":0,"y":0,"w":400,"h":300},"surroundSkinLocation":{"x":0,"y":0,"w":0,"h":0},"playerWidth":400,"playerHeight":300,"controlsAutoPosition":true,"controlsChromeless":true,"controlsBackgroundAlpha":"1.0","controlsConfig":{"colorSchema":{"mainColor":{"backgroundAlpha":1.0}}},"nielsenSiteCampaign":"cmp218422","nielsenChannelCampaign":"cmp185270","backgroundFill":true,"backgroundColor":0,"surround3DBevelShadowColor":16777215,"surround3DBevelHighlightColor":16777215,"surroundInnerRadius":0,"surroundCornerRadius":0,"surroundHole":false,"surround3D":false,"surround3DBevelSize":0,"surround3DBevelStrength":0.0,"publisherPayout":"None","publisherAmount":0.0,"metaData":{},"showLogo":false,"isResponsive":false,"HLSExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/hls-plugin.swf","IMAExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/ima-ad-module.swf","YuMeExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/yume-ad-module.swf","FreeWheelExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/free-wheel-module.swf","VASTExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/vast-ad-engine.swf","PlayerAdSystem":"http://cdn.vidible.tv/prod/player/swf/16.06.184/vidible-ad-server.swf","UIExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/controls-sticky.swf","AgeGateExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/age-gate.swf","SubtitlesExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/subtitles.swf","ClickExtra":"http://cdn.vidible.tv/prod/player/swf/16.06.184/click-throughs.swf"},"adSettings":{"podSize":1,"prerollInterleave":1,"softTimeout":0.4,"hardTimeout":3.2,"startTimeout":19.200000000000003,"domainOptimisation":true,"adStrategy":"ADSET_BASED","companions":[],"aeg":[],"asids":["5559fd66e4b0edc2449140e7"]},"playerWidget":{"playerType":"SMART","url":"http://cdn.vidible.tv/prod/player/swf/16.06.184/player-vast.swf","adOnly":false,"isAol":false},"geo":{"country":"idn","region":"jb","zipCode":"16111","areaCode":"0","connSpeed":"broadband"},"brandedContent":false}
    );
    function _(json) {
                    /*
     Developed by Robert Nyman, http://www.robertnyman.com
     Code/licensing: http://code.google.com/p/getelementsbyclassname/
     */
            var getElementsByClassName = function (className, tag, elm) {
                if (document.getElementsByClassName) {
                    getElementsByClassName = function (className, tag, elm) {
                        elm = elm || document;
                        var elements = elm.getElementsByClassName(className),
                            nodeName = (tag) ? new RegExp("\\b" + tag + "\\b", "i") : null,
                            returnElements = [],
                            current;
                        for (var i = 0, il = elements.length; i < il; i += 1) {
                            current = elements[i];
                            if (!nodeName || nodeName.test(current.nodeName)) {
                                returnElements.push(current);
                            }
                        }
                        return returnElements;
                    };
                }
                else if (document.evaluate) {
                    getElementsByClassName = function (className, tag, elm) {
                        tag = tag || "*";
                        elm = elm || document;
                        var classes = className.split(" "),
                            classesToCheck = "",
                            xhtmlNamespace = "http://www.w3.org/1999/xhtml",
                            namespaceResolver = (document.documentElement.namespaceURI === xhtmlNamespace) ? xhtmlNamespace : null,
                            returnElements = [],
                            elements,
                            node;
                        for (var j = 0, jl = classes.length; j < jl; j += 1) {
                            classesToCheck += "[contains(concat(' ', @class, ' '), ' " + classes[j] + " ')]";
                        }
                        try {
                            elements = document.evaluate(".//" + tag + classesToCheck, elm, namespaceResolver, 0, null);
                        }
                        catch (e) {
                            elements = document.evaluate(".//" + tag + classesToCheck, elm, null, 0, null);
                        }
                        while ((node = elements.iterateNext())) {
                            returnElements.push(node);
                        }
                        return returnElements;
                    };
                }
                else {
                    getElementsByClassName = function (className, tag, elm) {
                        tag = tag || "*";
                        elm = elm || document;
                        var classes = className.split(" "),
                            classesToCheck = [],
                            elements = (tag === "*" && elm.all) ? elm.all : elm.getElementsByTagName(tag),
                            current,
                            returnElements = [],
                            match;
                        for (var k = 0, kl = classes.length; k < kl; k += 1) {
                            classesToCheck.push(new RegExp("(^|\\s)" + classes[k] + "(\\s|$)"));
                        }
                        for (var l = 0, ll = elements.length; l < ll; l += 1) {
                            current = elements[l];
                            match = false;
                            for (var m = 0, ml = classesToCheck.length; m < ml; m += 1) {
                                match = classesToCheck[m].test(current.className);
                                if (!match) {
                                    break;
                                }
                            }
                            if (match) {
                                returnElements.push(current);
                            }
                        }
                        return returnElements;
                    };
                }
                return getElementsByClassName(className, tag, elm);
            };
            var cl = "vdb_5559fdd5e4b0edc24491424d51b6b137e4b024cd0d33d90c";
            var c = getElementsByClassName(cl, null, document.body)[0];
            c.className = c.className.replace(new RegExp("(\\s*)" + cl + "\\s*", "g"), "$1");
                var p = (c.getAttribute("vdb_params") || "") + "";

        var cb = /(?:[\?&]|^)m\.cb=(.*?)(&m\..*?=|$)/g.exec(p);
        cb = cb && cb[1] || Math.random();
        var ur = /(?:[\?&]|^)m\.url=(.*?)(&m\..*?=|$)/g.exec(p);
        ur = ur && ur[1];
        function ee(pn, v, dv) {
            var ve = dv && dv(v) || v;
            if (ve == v) {
                try {
                    ve = decodeURIComponent(v);
                    ve = encodeURIComponent(ve);
                } catch (e) {
                    ve = encodeURIComponent(v);
                }
            }
            p = p.replace("m." + pn + "=" + v, "m." + pn + "=" + ve);
            v = ve;
            return v;
        }

        ee("url", ur);
        p += p && "&";
        var ifr = window != top;
        var r = encodeURIComponent(ifr ? document.referrer : location.href);
        var i = document.createElement("img");
        var it = new Date().getTime();
        var pt = "smart";
        
        var pixelParams = p + "ifr=" + ifr + "&cb=" + cb + "&r=" + r + "&pt=" + pt;
                                    i.src = "http://trk.vidible.tv/trk/impression.gif?pid=5559fdd5e4b0edc24491424d&bcid=51b6b137e4b024cd0d33d90c&" + pixelParams;
                i = document.createElement("img");
                            i.src = "http://trk.vidible.tv/trk/js-loaded.gif?pid=5559fdd5e4b0edc24491424d&bcid=51b6b137e4b024cd0d33d90c&" + pixelParams;
                var s = document.createElement("script");
        s.type = "text/javascript";
                    s.src = "http://cdn.vidible.tv/prod/player/js/16.06.250/vidible-min.js?pid=5559fdd5e4b0edc24491424d&bcid=51b6b137e4b024cd0d33d90c&" + pixelParams;
        
        s.onload = function () {
            var options = {
                apid: "",
                pid: "5559fdd5e4b0edc24491424d",
                bcid: "51b6b137e4b024cd0d33d90c",
                params: p,
                it: it,
                site: r,
                pt: pt
            }
                            options.content = c;
                                var pl = vidible.createPlayer(options, json, {"cdn":"http://cdn.vidible.tv/prod/","trk":"http://trk.vidible.tv/trk/","ds":"http://delivery.vidible.tv/","ads":"http://ads.vidible.tv/","adt":"http://ads.vidible.tv/","ptv":"http://portal.vidible.tv/"});
                                        var i = document.createElement("img");
                i.src = "http://trk.vidible.tv/trk/js-started.gif?pid=5559fdd5e4b0edc24491424d&bcid=51b6b137e4b024cd0d33d90c&" + pixelParams;
                        var clb =  window['vidibleInitialize'];
            if (clb) {
                clb(pl);
            }
            s.onload = s.onreadystatechanged = function () {
            };
        };
        s.onreadystatechange = function () {
            if (s.readyState == 'complete' || s.readyState == 'loaded') {
                s.onload();
            }
        };
        c.appendChild(s);
    }
})();
