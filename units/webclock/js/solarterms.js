// By bkryufo

function getjq(yyyy,mm,dd){
mm = mm-1;
var sTermInfo = new Array(0,21208,42467,63836,85337,107014,128867,150921,173149,195551,218072,240693,263343,285989,308563,331033,353350,375494,397447,419210,440795,462224,483532,504758);
var solarTerm = new Array("小寒","大寒","立春","雨水","惊蛰","春分","清明","谷雨","立夏","小满","芒种","夏至","小暑","大暑","立秋","处暑","白露","秋分","寒露","霜降","立冬","小雪","大雪","冬至");
var solarTerms = "";
//　　此方法是获取该日期是否为某节气
    var tmp1 = new Date((31556925974.7*(yyyy-1900)+sTermInfo[mm*2+1]*60000)+Date.UTC(1900,0,6,2,5));
    var tmp2 = tmp1.getUTCDate();
    if (tmp2==dd)
        solarTerms = solarTerm[mm*2+1];
    //console.log(solarTerms);
    tmp1 = new Date((31556925974.7*(yyyy-1900)+sTermInfo[mm*2]*60000)+Date.UTC(1900,0,6,2,5));
    tmp2= tmp1.getUTCDate();
    if (tmp2==dd)
        solarTerms = solarTerm[mm*2];

//　　此方法可以获取该日期处于某节气
//while (solarTerms==""){ var tmp1 = new Date((31556925974.7*(yyyy-1900)+sTermInfo[mm*2+1]*60000)+Date.UTC(1900,0,6,2,5)); var tmp2 = tmp1.getUTCDate(); if (tmp2==dd) solarTerms = solarTerm[mm*2+1];tmp1 = new Date((31556925974.7*(yyyy-1900)+sTermInfo[mm*2]*60000)+Date.UTC(1900,0,6,2,5)); tmp2= tmp1.getUTCDate(); if (tmp2==dd) solarTerms = solarTerm[mm*2]; if(dd>1){ dd=dd-1; }else { mm=mm-1; 　　if(mm<0){ 　　　　yyyy=yyyy-1; mm=11; 　　} 　　dd=31; 　　} }
return solarTerms; }

function subtitle(){
	d = new Date()
	
	if(d.getMonth + 1 == 5 && d.getDate() == 6){
		return '🎉Happy Birthday To Joseph Zhang🎂'
	}
	/* After getting the codes and being agreed with Jeffery Yu, I add these code to get some special festivals. */
	else if(d.getMonth + 1 == 1 && d.getDate() == 1){
		return '元旦'
	}
	else if(d.getMonth + 1 == 4 && d.getDate() == 1){
		return '愚人节'
	}
	else if(d.getMonth + 1 == 10 && d.getDate() == 1){
		return '国庆节'
	}
	else if(d.getMonth + 1 == 12 && d.getDate() == 13){
		return '国家公祭日'
	}
	else if(d.getMonth + 1 == 11 && d.getDate() == 7){
		return '十月革命日'
	}
	/* end */

	j = getjq(d.getYear() + 1900, d.getMonth() + 1, d.getDate())
	if(j.length == 0){
		var a =  (d.getMonth() + 1) * 100 + d.getDate()
				
		if(a < 205 || a > 1108)return '冬天';
		else if(a >= 205 && a < 506)return '春天';
		else if(a >= 506 && a < 808)return '夏天';
		else return '秋天'
	}
	else return j
}
