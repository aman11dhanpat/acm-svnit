'use strict';

window.onload = positionTheContainer;
window.addEventListener('resize', positionTheContainer);
window.addEventListener('keydown',function(event){
	event = event || e;
	switch(event.keyCode){
		case 27:
			nBSExcept('none');
			break;
	}
});

function positionTheContainer(){
	var theContainer = document.getElementById('theContainer');
	var width = window.innerWidth;
	var distanceFromCentre = width - 900;
	if(distanceFromCentre < 0)
		theContainer.style.cssText = "left: 5px";
	else
		theContainer.style.cssText = "left: 50%;margin-left: -450px";
}

//more JS goes here
//and here :p

function killMyChildren(ele){								//don't sue me for this name
	var children = ele.childNodes;
	for(var i=0;i<children.length;)
		ele.removeChild(children[i]);						//killed 'em brutally!
}

function count(obj){
	var i=0;
	for(var prop in obj)
		if (obj.hasOwnProperty(prop))
			i++;
	return i;
}

function addElement(tag, parentnode, csstext, htmlCode){	 			//some multipurpose thing ;)
	var ele = document.createElement(tag);
	ele.style.cssText = csstext;
	ele.insertAdjacentHTML('afterbegin', htmlCode);
	parentnode.appendChild(ele);
}

function applyClass(classFinal, nodeList){
	var length = nodeList.length;
	if(length === undefined)
		nodeList.className = classFinal;
	else
		for(var i=0;i<length;i++)
			nodeList[0].className = classFinal;
}

function applyClassExcept(node, extraClass, classFinal, nodeList){			//LOL extraClass ;)
	var length = nodeList.length;
	for(var i=0;i<length;i++)
		if(node === nodeList[i])
			node.className = classFinal + ' ' + extraClass;
		else
			nodeList[i].className = classFinal;
}

function nBSExcept(param){								//this function has to do the most tedious and daunting task of managing shit
	if(param == 'none'){
		toggleDropdown(1);
		setTimeout("slideBubble("+marginLeft+", -30, 1)", 20);
		applyClass('nav_child', document.getElementsByClassName('nav_child_after-select'));
		applyClass('hidden', theContent);
	}
}

function stringify(obj){								//hehehe. Similar to JSON.stringify()
	return '"'+obj+'"';
}