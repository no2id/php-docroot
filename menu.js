// script to get menu working in IE6
if (navigator.appVersion.toLowerCase().indexOf("mac")==-1) {
	startList = function() {
	if (document.all&&document.getElementById) {
	navRoot = document.getElementById("mainMenuNav");
	for (i=0; i<navRoot.childNodes.length; i++) {
	node = navRoot.childNodes[i];
	if (node.nodeName=="LI") {
	node.onmouseover=function() {
	this.className+=" over";
	  }
	  node.onmouseout=function() {
	  this.className=this.className.replace(" over", "");
	   }
	   }
	  }
	 }
	}
	window.onload=startList;
}