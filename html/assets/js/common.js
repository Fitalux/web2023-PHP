// 운영체제 정보
let os = navigator.userAgent.toLowerCase();

if(os.indexOf("macintoshi")> -1){
    document.querySelector("body").classList.add("macintoshi");
} else if (os.indexOf("windows")> -1) {
    document.querySelector("body").classList.add("windows");
} else if (os.indexOf("iphone")> -1) {
    document.querySelector("body").classList.add("iphone");
} else if (os.indexOf("android")> -1) {
    document.querySelector("body").classList.add("android");
}

