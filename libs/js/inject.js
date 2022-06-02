$(document).ready( () =>{
    setDomInit();
});


$(document.body).on("DOMNodeInserted","", (event) => {
    if (event.target.hasAttribute('injection-id-url-active')){
        setDom(event.target);
        //setDomInit();
        
    }
    //setDomInit();
});

function setDomInit(){
    var targets = document.querySelectorAll("[injection-id-url-active]");
    targets.forEach((target) => {
        url = target.getAttribute("injection-id-url-active");
        target.setAttribute("injection-id-url", url);
        target.removeAttribute("injection-id-url-active");
        htmlString = httpGet(url);
        insertHTML(htmlString, target, false);
    })
}

function setDom(target){
    if (event.target.hasAttribute('injection-id-url-active')){
        url = target.getAttribute("injection-id-url-active");
        target.setAttribute("injection-id-url", url);
        target.removeAttribute("injection-id-url-active");
        htmlString1 = httpGet(url);
        insertHTML(htmlString1, target, false);
    }
}

function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
    return xmlHttp.responseText;
}

function insertHTML(html, dest, append=false){
    if(!append) dest.innerHTML = '';
    let container = document.createElement('div');
    container.innerHTML = html;
    let scripts = container.querySelectorAll('script');
    let nodes = container.childNodes;
    for( let i=0; i< nodes.length; i++) dest.appendChild( nodes[i].cloneNode(true) );
    for( let i=0; i< scripts.length; i++){
        let script = document.createElement('script');
        script.type = scripts[i].type || 'text/javascript';
        if( scripts[i].hasAttribute('src') ) script.src = scripts[i].src;
        script.innerHTML = scripts[i].innerHTML;
        document.head.appendChild(script);
        document.head.removeChild(script);
    }
    return true;
}