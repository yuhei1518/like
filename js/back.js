particlesJS("particles-js", {
	"particles":{
		"number":{
			"value":15,//この数値を変更すると桜の数が増減できる
			"density":{
				"enable":true,
				"value_area":1121.6780303333778
			}
		},
		"color":{
			"value":"#fff"
		},
		"shape":{
			"type":"image",//形状は画像を指定
			"stroke":{
				"width":0,
			},
			"image":{
				"src":"images/snowflake.png",//【重要】画像を指定！桜の画像を設定してください。
				"width":120,
				"height":120
			}
		},
		"opacity":{
			"value":0.06409588744762158,
			"random":true,
			"anim":{
				"enable":false,
				"speed":1,
				"opacity_min":0.5,
				"sync":false
			}
		},
		"size":{
			"value":8.011985930952697,
			"random":true,//サイズをランダムに
			"anim":{
				"enable":false,
				"speed":4,
				"size_min":0.5,
				"sync":false
			}
		},
		"line_linked":{
			"enable":false,
		},
		"move":{
			"enable":true,
			"speed":4,//この数値を小さくするとゆっくりな動きになる
			"direction":"bottom",//右下に向かって落ちる
			"random":false,//動きはランダムにしない
			"straight":false,//動きをとどめない
			"out_mode":"out",//画面の外に出るように描写
			"bounce":false,//跳ね返りなし
			"attract":{
				"enable":false,
				"rotateX":281.9177489524316,
				"rotateY":127.670995809726
			}
		}
	},
	"interactivity":{
		"detect_on":"canvas",
		"events":{
			"onhover":{
				"enable":false,
			},
			"onclick":{
				"enable":false,
			},
			"resize":true
		}
	},
	"retina_detect":false
});

