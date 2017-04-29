/*FB comment script to be loaded at end of page*/
(function (d, s, id) {
    //BS-KL-20102015 - removed console.log statment
    //console.log('loaded- kuoni.connect-facebook');
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=250133291716608&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    //console.log('loaded complete- kuoni.connect-facebook');
}(document, 'script', 'facebook-jssdk'));