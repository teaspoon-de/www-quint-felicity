function back() {
    window.location.assign(getLastSite());
}
function getLastSite() {
    var path = window.location.pathname;
    if (path.substring(path.length-1) == "/")
        path = path.substring(0, path.length-1);
    var pathSplit = path.split("/");
    var s = path.substring(0,path.length - pathSplit[pathSplit.length-1].length -1);
    return s == ""? "/": s;
}