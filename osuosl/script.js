Drupal.behaviors.osuosl = function (context) {
    // Replace search engine-friendly site name with one with pseudocode elements
    var openBracket = new Array("{ ","// ","/* ","< ","[ ","( ","s/"," ","# ");
    var closeBracket = new Array(" }"," //"," */"," >"," ]"," );","/"," "," ");
    var spaceReplace = new Array(".","_"," ");
    var randBracket = Math.floor(Math.random() * openBracket.length);
    var randSpace = Math.floor(Math.random() * spaceReplace.length);
    $newElement = '<h1 id="site-name"><a rel="home" title="Home" href="/"> </a><a rel="home" title="Home" href="/">' + openBracket[randBracket] + 'open' + spaceReplace[randSpace] + 'source' + spaceReplace[randSpace] + 'lab' + closeBracket[randBracket] +'</a></h1>';
    $("#site-name").before($newElement).remove(); 
};
