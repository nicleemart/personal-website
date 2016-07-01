var container;
var content;
var dcLogo;
var bgExit;
var ctaURL;
var xmlDoc;
var offerURL;
var leaseAnewCopy='';
//show offer frame boolean
var leaseOffer =false;
var showOfferFrame = true;//dynamicContent.DTOY_0715_TDA_MASTER_CTA_Optimizing_SE[0].Frame2_Exists;
var showBkgrdImage =dynamicContent.Mini_Event[0].bg_image_exists;

var top_bkgrd_color = dynamicContent.Mini_Event[0].top_bg_color_hex;
var bottom_bkgrd_color =dynamicContent.Mini_Event[0].bottom_bg_color_hex;
var cta_bkgrd_color=dynamicContent.Mini_Event[0].cta_bg_color_hex;
var cta_color=dynamicContent.Mini_Event[0].cta_copy_hex;
var headline_color =dynamicContent.Mini_Event[0].headline_color_hex;
var disclaimer_color=dynamicContent.Mini_Event[0].disclaimer_color_hex;
var offer_color = dynamicContent.Mini_Event[0].offer_copy_color_hex;
var cta_1 = dynamicContent.Mini_Event[0].cta_copy;

var ctaUrl_1 = dynamicContent.Mini_Event[0].ctaUrl_1.Url

//var ctaUrl_2 = dynamicContent.CTA_3[0].ctaUrl_2.Url;
//var ctaUrl_3 = dynamicContent.CTA_3[0].ctaUrl_3.Url;
//main exit
var mainExitURL = dynamicContent.Model[0].mainExit.Url;
//default offer
var defaultOfferURL=dynamicContent.Model[0].currentOfferDefault.Url;

var logoExit=dynamicContent.Model[0].logoExit.Url;
var toyota_logo=dynamicContent.Mini_Event[0].toyota_logo_728x90.Url;
var bkgrdImage=dynamicContent.Mini_Event[0].background_image_728x90.Url;
var miniEventLogo=dynamicContent.Mini_Event[0].event_logo_728x90.Url;

var compare_code = dynamicContent.Model[0].compareCode;
var series_name = dynamicContent.Model[0].series_name;
var modelImage = dynamicContent.ModelImages[0].modelImage.Url;
var backup_zip = dynamicContent.Model[0].backup_zip;
var model_name = dynamicContent.Model[0].model_name;
var model_name_lower_case = dynamicContent.Model[0].model_name;

var model_year = dynamicContent.Model[0].modelYear;
var genDisclosure = dynamicContent.Model[0].genDisclosure;
var disclosureCTA = dynamicContent.Model[0].disclosureCTA;

var headline_main = dynamicContent.Mini_Event[0].headline_728x90;

var model_year = dynamicContent.Model[0].modelYear;
var genDisclosure = dynamicContent.Model[0].genDisclosure;
var disclosureCTA = dynamicContent.Model[0].disclosureCTA;

var headline_main = dynamicContent.Mini_Event[0].headline_728x90;

var disclosureCopy = "";
var region = dynamicContent.Model[0].traffickingRegion;

var zipCode = "";
var siteZipKey = Enabler.getParameter("siteZipVar");
var backup_zip = dynamicContent.Model[0].backup_zip;
if (siteZipKey !== "" && siteZipKey !== null && siteZipKey !== undefined) {
    var siteZipValue = Enabler.getParameter(siteZipKey);
    if (siteZipValue !== "" && siteZipValue !== null && siteZipValue !== undefined) {
        if (typeof siteZipValue === 'number') {
            zipCode = siteZipValue;
        } else {}
    } else {}
}
if (zipCode === "") {
    var userZip = Enabler.getUserZipCode();
    if (userZip !== "" && userZip !== null && userZip !== undefined) {
        zipCode = userZip;
    }
}
if (zipCode.toString().length === 0) {
    zipCode = backup_zip;
}
var locZipCode = zipCode.toString();
//placeholders
var placeHoldRegion = "[region]";
var placeHoldModel = "[model]";
var placeHoldIncent = '[incentive ID]';
var placeHoldCompare = '[compareCode]';
var exitHolder;
var replacePlaceHolder = function(stringRepl, placeHold, replacewith) {
	'use strict';
    var intIndexOfMatch = stringRepl.indexOf(placeHold);
    while (intIndexOfMatch !== -1) {
        stringRepl = stringRepl.replace(placeHold, replacewith);
        intIndexOfMatch = stringRepl.indexOf(placeHold);
        return (stringRepl);
    }
};


//add all url vars to array
var urlArray = [ctaUrl_1, mainExitURL,defaultOfferURL,logoExit];
//search array of url for placeholders
for (var i = 0; i < urlArray.length; i++) {
    exitHolder = replacePlaceHolder(urlArray[i], placeHoldRegion, region);
    if (exitHolder !== undefined) {
        urlArray[i] = exitHolder;
    }
}
for (var j = 0; j < urlArray.length; j++) {
    exitHolder = replacePlaceHolder(urlArray[j], placeHoldModel, series_name);
    if (exitHolder !== undefined) {
        urlArray[j] = exitHolder;
    }
}
for (var t = 0; t < urlArray.length; t++) {
    exitHolder = replacePlaceHolder(urlArray[t], placeHoldCompare, compare_code);
    if (exitHolder !== undefined) {
        urlArray[t] = exitHolder;
    }
}

//initialize
function initBanner() {
	'use strict';
	
    var ws_url_add;

    $('#car-model').css("background-image", "url(" + modelImage + ")");
    $('#toy_logo').css("background-image", "url(" + toyota_logo + ")");
		if(showBkgrdImage){
	$('#backgroundImage').css("background-image", "url(" + bkgrdImage + ")");

	}
	$('#event_logo').css("background-image", "url(" + miniEventLogo + ")");
    //size car for 728x90	 
    $('#car-model').css("background-size", "95%");
    document.getElementById("view_disclaimer_copy").innerHTML =disclosureCTA;
    document.getElementById("gen_disclaimer_copy").innerHTML = genDisclosure;
    document.getElementById("headline_copy").innerHTML = headline_main;
     document.getElementById("cta_copy").innerHTML = cta_1 + ' <img class="circle-arrow" src="circle-pointer.png" width="16" height="16" alt=""/>';;
    
	
	if (locZipCode && locZipCode.length < 5) {
		
                while (locZipCode.length !== 5) {
                    locZipCode = '0' + locZipCode;
                }
            }

            if (locZipCode && /^\d{5}/.test(locZipCode)) {
                
            } else {
				
                showOfferFrame = false;
				
            }
	
    if (showOfferFrame === false) {
        noOffers();
    } else {
		 
		
		
            ws_url_add ='https://www.buyatoyota.com/offers-service/OFFERS/allOffers?series=' + series_name + '&zipCode=' + locZipCode;
       
		//ws_url_add ='https://www.buyatoyota.com/offers-service/OFFERS/allOffers?series=camry&zipCode=06016';
		
        var ws_url = ws_url_add.toString();
		
		
        var jqxhr = $.get(ws_url, function(response) { //console.log(response)
            //  var jqxhr = $.get('https://www.buyatoyota.com/offers-service/OFFERS/allOffers?series=avalon&zipCode=06413', function(response) { //console.log(response)
            xmlDoc = response;
		
			
		/*	
			var s = new XMLSerializer();
 var d = xmlDoc;
 var str = s.serializeToString(d);
 //alert(str);


*/
        }).done(function() {
			
            //make sure actual object returned
            if ((typeof xmlDoc) === 'object') {
                findNodeValues();
            } else {
				xmlDoc = parseXml(xmlDoc);
               
              findNodeValues();
              // noOffers();
            }
        }).fail(function() {
            // console.log( "error" );
			return noOffers();
           
        });
var parseXml;

if (typeof window.DOMParser != "undefined") {
    parseXml = function(xmlStr) {
        return ( new window.DOMParser() ).parseFromString(xmlStr, "text/xml");
    };
} else if (typeof window.ActiveXObject != "undefined" &&
       new window.ActiveXObject("Microsoft.XMLDOM")) {
    parseXml = function(xmlStr) {
        var xmlDoc = new window.ActiveXObject("Microsoft.XMLDOM");
        xmlDoc.async = "false";
        xmlDoc.loadXML(xmlStr);
        return xmlDoc;
    };
} else {
	return noOffers();
    //throw new Error("No XML parser found");
}
        var findNodeValues = function() {
			
            var getDisclaimer;
			var getDisclaimer2;
            var getDisclaimer_ck;
			var getDisclaimer_ck2;
            var disclaimer;
            var incentId;
            var offerType;
            var hasIncentId;
            var hasIncentId_ck;
			var hasIncentId_ck1;
			var hasIncentId_ck2;
			var lease_copy;
			if(!xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/offers","contains-offers")[0] ){
			//bad xml
			return noOffers();
		}
            if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/offers","contains-offers")[0].childNodes[0].nodeValue ==="false" ) {
                noOffers();
            } else if (xmlDoc.getElementsByTagNameNS(
                    "http://offers.bat.tms.com/types/offers", "contains-offers")[0].childNodes[0].nodeValue === "true") {
						
					
                //	alert(xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/offers", "total-offers")[0].childNodes[0].nodeValue);
                var totalNumOffers = Number(xmlDoc.getElementsByTagNameNS( "http://offers.bat.tms.com/types/offers","total-offers")[0].childNodes[0].nodeValue);
                //alert(totalNumOffers  +'  '+ typeof totalNumOffers)
                for (var m = 0; m < totalNumOffers; m++) {
                    if ("apr:offer" === xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/offers",
                        "offer-bundle")[0].childNodes[m].nodeName) {
                        offerType = xmlDoc.getElementsByTagNameNS(
                            "http://offers.bat.tms.com/types/offers",
                            "offer-bundle")[0].childNodes[m].nodeName;
                       
                        break;
                    }
                    if ("cash:offer" === xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/offers",
                        "offer-bundle")[0].childNodes[m].nodeName) {
                        offerType = xmlDoc.getElementsByTagNameNS(
                            "http://offers.bat.tms.com/types/offers",
                            "offer-bundle")[0].childNodes[m].nodeName;
                        
                        break;
                    }
                    if ("lease:offer" === xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/offers",
                        "offer-bundle")[0].childNodes[m].nodeName) {
                        offerType = xmlDoc.getElementsByTagNameNS(
                            "http://offers.bat.tms.com/types/offers",
                            "offer-bundle")[0].childNodes[m].nodeName;
                    
                        break;
                    }
                }
				
				if (offerType=== undefined || offerType=== null) {
					noOffers();
				}
 // offerType = 'lease:offer';
	
				/////////////////////////APR OFFER//////////////////////////////
                if (offerType === "apr:offer") {
					
					 hasIncentId = '';
                     if (xmlDoc.getElementsByTagNameNS( "http://offers.bat.tms.com/types/apr","offer-id")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","offer-id")[0] !== null) {
						hasIncentId_ck1 = xmlDoc.getElementsByTagNameNS( "http://offers.bat.tms.com/types/apr","offer-id")[0];
						
						if(hasIncentId_ck1 !== undefined) {
                        if (hasIncentId_ck1.childNodes[0] !== undefined) {				
						 hasIncentId = hasIncentId_ck1.childNodes[0];	
						}
						}
                    }
                   
                    incentId = hasIncentId.nodeValue;
					disclaimer ='';
                    if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","disclaimer")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","disclaimer")[0] !== null) {
                        getDisclaimer_ck = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","disclaimer")[0];
						if(getDisclaimer_ck !== undefined) {
                        if (getDisclaimer_ck.childNodes[0] !== undefined) {
                            getDisclaimer = getDisclaimer_ck.childNodes[0];
                            disclaimer = getDisclaimer.nodeValue;
                        }
						}
                    }

                    if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","additional-disclaimers")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","additional-disclaimers")[0] !== null) {
                        getDisclaimer_ck2 = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/apr","additional-disclaimers")[0];
						if(getDisclaimer_ck2 !== undefined) {
                        if (getDisclaimer_ck2.childNodes[0] !== undefined) {
                            getDisclaimer2 = getDisclaimer_ck2.childNodes[0];
                            disclaimer = disclaimer + ' ' + getDisclaimer2.nodeValue;
                        }
						}
                    }

                    if (disclaimer !== "" && disclaimer !== null) {
                        $('#view_disclaimer_copy').show();
				document.getElementById('disclaimer_copy_show').innerHTML= disclaimer;
                    }
                    var rate = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/apr",
                        "term")[0].getAttributeNode("rate").nodeValue;
                    var duration = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/apr",
                        "term")[0].getAttributeNode("duration").nodeValue;
					var dollars = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/apr",
                        "term")[0].getAttributeNode("dollars-per-thousand").nodeValue;
                    var extraCashAmount = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/apr",
                        "term")[0].getAttributeNode(
                        "extra-cash-amount").nodeValue;
					/*var dueAtPurchase = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/apr",
                        "term")[0].getAttributeNode("due-at-signing-amount").nodeValue;
						*/
						var seriesYearAPR = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/apr",
                        "series")[0].getAttributeNode(
                        "year").nodeValue;
						//show offer series year
						model_year=seriesYearAPR;
                  // rate=0;
				//extraCashAmount=1000;
					
                if (extraCashAmount !== "" && extraCashAmount !== null && extraCashAmount !== 0) {
					 var apr_copy_cash = "<span class='offer-details-bold'>" + rate + "%</span> APR for <span class='offer-details-bold'>" + duration + "</span> months<br><span class='offer-details-small'>with <sup>$</sup>"+dollars+" per <sup>$</sup>1,000 borrowed<br>plus</span> <span class='offer-details-bold'><sup>$</sup>"+extraCashAmount+" </span> <span class='offer-details-bold-small'>Bonus Cash</span>";
					 
					 $('#offer_details').removeClass('offer-details').addClass('offer-details-aprcash');
					 document.getElementById("offer_model").innerHTML = model_name;
                document.getElementById("offer_year").innerHTML = model_year;
	//var lease_copy = 'Lease a new '+model_year+' '+ model_name+' for only $' + amountMonthlyLease +' per month for '+ monthsLease +' Months. $'+dueAtLease+' due at signing plus $'+extraCashAmountLease+' bonus cash.';
				 document.getElementById("offer_details").innerHTML =apr_copy_cash;
			
					 
	
                } else {
				 var apr_copy = "<span class='offer-details-bold'>" + rate + "%</span> APR for <span class='offer-details-bold'>" + duration + "</span> months<br><span class='offer-details-small'>with <sup>$</sup>"+dollars+" per <sup>$</sup>1,000 borrowed</span>";
					 
					 $('#offer_details').removeClass('offer-details').addClass('offer-details-apr');
					 document.getElementById("offer_model").innerHTML = model_name;
                document.getElementById("offer_year").innerHTML = model_year;
	//var lease_copy = 'Lease a new '+model_year+' '+ model_name+' for only $' + amountMonthlyLease +' per month for '+ monthsLease +' Months. $'+dueAtLease+' due at signing plus $'+extraCashAmountLease+' bonus cash.';
				 document.getElementById("offer_details").innerHTML =apr_copy;
                }
			
                    //set offer with incentive
                    mainExitURL = urlArray[1];
                    exitHolder = replacePlaceHolder(mainExitURL,
                        placeHoldIncent, incentId);
                    if (exitHolder !== undefined) {
                        mainExitURL = exitHolder;
                    }
                    //	mainExitURL
                    offerURL = mainExitURL;
					
                    startAnim();
					
					///////////////////CASH OFFER///////////////////////////////////
                } else if (offerType === "cash:offer") {
					
					hasIncentId_ck='';
                    if (xmlDoc.getElementsByTagNameNS( "http://offers.bat.tms.com/types/cash","offer-id")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","offer-id")[0] !== null) {
						hasIncentId_ck1 = xmlDoc.getElementsByTagNameNS( "http://offers.bat.tms.com/types/cash","offer-id")[0];
						if(hasIncentId_ck1 !== undefined) {
                        if (hasIncentId_ck1.childNodes[0] !== undefined) {	
						//hasIncentId				
                        hasIncentId_ck=hasIncentId_ck1;
						}
						}
                    }
					
					if(hasIncentId_ck===''){
					
                    if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","offer-id")[1] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","offer-id")[1] !== null) {
                        hasIncentId_ck2 = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","offer-id")[1];
						if(hasIncentId_ck2 !== undefined) {
                        if (hasIncentId_ck2.childNodes[0] !== undefined) {	
						hasIncentId_ck=hasIncentId_ck2;
						}
						}
                    }
					}
					
					
					//alert(hasIncentId_ck.childNodes[0];);
                    //  var hasIncentId_ck = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash", "offer-id")[1];
                    // alert(xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash", "offer-id")[0])
                    hasIncentId = hasIncentId_ck.childNodes[0];
					
                    incentId = hasIncentId.nodeValue;
					      disclaimer ='';
						 
					 if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","disclaimer")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","disclaimer")[0] !== null) {
                        getDisclaimer_ck = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","disclaimer")[0];
						if(getDisclaimer_ck !== undefined) {
                        if (getDisclaimer_ck.childNodes[0] !== undefined) {
                            getDisclaimer = getDisclaimer_ck.childNodes[0];
                            disclaimer = getDisclaimer.nodeValue;
                        }
						}
                    }

                    if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","additional-disclaimers")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","additional-disclaimers")[0] !== null) {
                        getDisclaimer_ck2 = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/cash","additional-disclaimers")[0];
						if(getDisclaimer_ck2 !== undefined) {
                        if (getDisclaimer_ck2.childNodes[0] !== undefined) {
                            getDisclaimer2 = getDisclaimer_ck2.childNodes[0];
                            disclaimer = disclaimer + ' ' + getDisclaimer2.nodeValue;
                        }
						}
                    }

                    if (disclaimer !== "" && disclaimer !== null) {
						$('#view_disclaimer_copy').show();
                       
                    }
					var seriesYearCash = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/cash",
                        "series")[0].getAttributeNode(
                        "year").nodeValue;
						//show offer series year
						model_year=seriesYearCash;
                    var hasCashOffer_ck = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/cash",
                        "cash-amount")[0];
                    var hasCashOffer = hasCashOffer_ck.childNodes[0];
                    var cashAmount = hasCashOffer.nodeValue;
					document.getElementById("offer_model").innerHTML = model_name;
                document.getElementById("offer_year").innerHTML = model_year;
					 var cash_copy = "Get <supc>$</supc><span class='offer-details-cash-bold'>" + cashAmount + "</span> Cash Back";
					
                 $('#offer_details').removeClass('offer-details').addClass('offer-details-cash');
                document.getElementById("offer_details").innerHTML = cash_copy;
	               
                    //set offer with incentive
                    mainExitURL = urlArray[1];
                    exitHolder = replacePlaceHolder(mainExitURL,
                        placeHoldIncent, incentId);
                    if (exitHolder !== undefined) {
                        mainExitURL = exitHolder;
                    }
                    
                    offerURL = mainExitURL;
                    startAnim();

					//////////////////////LEASE OFFER///////////////////////
					
                } else if (offerType === "lease:offer") {
					
                    hasIncentId_ck = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/lease",
                        "offer-id")[0];
                    hasIncentId = hasIncentId_ck.childNodes[0];
                    incentId = hasIncentId.nodeValue;
					disclaimer ='';
				
                    if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/lease","disclaimer")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/lease","disclaimer")[0] !== null) {
                        getDisclaimer_ck = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/lease","disclaimer")[0];
						if(getDisclaimer_ck !== undefined) {
                        if (getDisclaimer_ck.childNodes[0] !== undefined) {
                            getDisclaimer = getDisclaimer_ck.childNodes[0];
                            disclaimer = getDisclaimer.nodeValue;
                        }
						}
                    }

                    if (xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/lease","additional-disclaimers")[0] !== undefined || xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/lease","additional-disclaimers")[0] !== null) {
                        getDisclaimer_ck2 = xmlDoc.getElementsByTagNameNS("http://offers.bat.tms.com/types/lease","additional-disclaimers")[0];
						if(getDisclaimer_ck2 !== undefined) {
                        if (getDisclaimer_ck2.childNodes[0] !== undefined) {
                            getDisclaimer2 = getDisclaimer_ck2.childNodes[0];
                            disclaimer = disclaimer + ' ' + getDisclaimer2.nodeValue;
                        }
						}
                    }

                    if (disclaimer !== "" && disclaimer !== null) {
						$('#view_disclaimer_copy').show();
							document.getElementById('disclaimer_copy_show').innerHTML= disclaimer;
						
                    }
                    var amountMonthlyLease = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/lease",
                        "term")[0].getAttributeNode(
                        "monthly-payment").nodeValue;
						
                    var monthsLease = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/lease",
                        "term")[0].getAttributeNode("duration").nodeValue;
						
						var dueAtLease = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/lease",
                        "term")[0].getAttributeNode("due-at-signing-amount").nodeValue;
					
					var extraCashAmountLease = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/lease",
                        "term")[0].getAttributeNode(
                        "extra-cash-amount").nodeValue;
					var seriesYearLease = xmlDoc.getElementsByTagNameNS(
                        "http://offers.bat.tms.com/types/lease",
                        "series")[0].getAttributeNode(
                        "year").nodeValue;
						//show offer series year
						leaseAnewCopy='LEASE A NEW';
						model_year= seriesYearLease;
			//extraCashAmountLease=2000;
						
					 if (extraCashAmountLease !== "" && extraCashAmountLease !== null) {
							
document.getElementById("offer_model").innerHTML = model_name;
                document.getElementById("offer_year").innerHTML = model_year; 
	//lease_copy = "for only <span class='offer-details-bold'><sup>$</sup>" + amountMonthlyLease +"</span> per month for <span class='offer-details-bold'>"+ monthsLease +"</span> Months. <sup>$</sup>'+dueAtLease+' due at signing plus <sup>$</sup>"+extraCashAmountLease+" bonus cash.";
	lease_copy = '<span class="offer-details-bold"><sup>$</sup>' + amountMonthlyLease +'</span> per month for <span class="offer-details-bold">'+ monthsLease +'</span> months<br><span class="offer-details-small"><sup>$</sup>'+dueAtLease+' due at signing</span><br>plus <span class="offer-details-bold"><sup>$</sup>'+extraCashAmountLease +' </span><span class="offer-details-bold-small">Bonus Cash</span>';
	 $('#offer_details').removeClass('offer-details').addClass('offer-details-lease-cash');
				  document.getElementById("offer_details").innerHTML =lease_copy;
					
	// var apr_copy_cash = "<span class='offer-details-bold'>" + rate + "%</span> APR for <span class='offer-details-bold'>" + duration + "</span> months<br><span class='offer-details-small'>with <sup>$</sup>"+dollars+" per <sup>$</sup>1,000 borrowed.<br>plus</span> <span class='offer-details-bold'><sup>$</sup>"+extraCashAmount+" Bonus Cash.</span>";
						 
					 }else{
						
						// document.getElementById('lease_details_amt').innerHTML =amountMonthlyLease;
						document.getElementById("offer_model").innerHTML = model_name;
                document.getElementById("offer_year").innerHTML = model_year;
	//document.getElementById('lease_details_due').innerHTML ="For "+monthsLease+" mos. $"+dueAtLease+"<br>due at signing, plus<br>taxes and fees";
	lease_copy = '<span class="offer-details-bold"><sup>$</sup>' + amountMonthlyLease +'</span> per month for <span class="offer-details-bold">'+ monthsLease +'</span> months<br><sup>$</sup>'+dueAtLease+' due at signing';
	 $('#offer_details').removeClass('offer-details').addClass('offer-details-lease');
				  document.getElementById("offer_details").innerHTML =lease_copy;
						 
					 }
					 
                   // var lease_copy = '<span class="lease-details">Lease a new '+model_year+' '+ model_name_lower_case+' for only $' + amountMonthlyLease +' per month for '+ monthsLease +' months.</span>';
                   // document.getElementById("offer_details").innerHTML =lease_copy;
                    //set offer with incentive
                    mainExitURL=urlArray[1];
                    exitHolder = replacePlaceHolder(mainExitURL,
                        placeHoldIncent, incentId);
                    if (exitHolder !== undefined) {
                        mainExitURL = exitHolder;
                    }
                    offerURL = mainExitURL;
					leaseOffer =true;
                    startAnim();
                    ////////lease is not used in these banners//////////////
                    //   noOffers();
                } else {
                    //offers returned false
                    noOffers();
                }
            } else {
                //offers returned false
                noOffers();
            }
        };
    }

    function noOffers() {
            showOfferFrame = false;
			
            //defaults to cta url if no offer
            //offerURL = urlArray[0];
            // document.getElementById("offer_details").innerHTML = generic_offer_copy;
            startAnim();
        }
        //playAnim

    function startAnim() {
		
        //set background and copy colors
		$('#topColor').css('background-color', top_bkgrd_color);
		$('#bottomColor').css('background-color', bottom_bkgrd_color);
		$('#toy_cta').css('background-color', cta_bkgrd_color);
		$('.cta-copy').css('color',cta_color);
		$('.leg-disclaimer-copy').css('color',disclaimer_color);
	//	$('.gen-disclaimer-copy').css('color',disclaimer_color);
		
		$('.headline-copy').css('color',headline_color);
		$('#offers').css('color',offer_color);
		$('.offer-year').css('color',offer_color);
		$('.offer-model').css('color',offer_color);
		$('.offer-brand').css('color',offer_color);
		document.getElementById("offer_model").innerHTML = model_name.toUpperCase();
    document.getElementById("offer_year").innerHTML = model_year;
		/*
		    document.getElementById('apr_details_percent_amt').innerHTML = "0.0";
	document.getElementById('apr_details_months').innerHTML ="FOR 36 MOS.";
	document.getElementById('apr_details_due').innerHTML ="$1000 due at signing";
	
	
	document.getElementById('aprcash_details_percent_amt').innerHTML = "0.0";
	document.getElementById('aprcash_details_months').innerHTML ="FOR 36 MOS.";
	document.getElementById('aprcash_details_due').innerHTML ="$1000 due at signing";
	document.getElementById('aprcash_details_bonus_amt').innerHTML ="999";
	
	document.getElementById('cashback_details_amt').innerHTML ="1000";
	*/



		
		fadeUpInitial();
		
		//showOfferFrame = false;//test for no offers
        if (showOfferFrame) {  
          setTimeout(fadeupEventLogo, 500);
		    setTimeout(fadeupFirstFrameContent, 800);
		  
            setTimeout(fadeUpViewDisclaimer, 7800);
			setTimeout(fadeOutfirstFrame, 7000);
			setTimeout(fadeUpOffer, 8000);
		
            addListeners();
        } else {
			
            setTimeout(fadeupEventLogo, 200);
		    setTimeout(fadeupFirstFrameContent, 1400);
		   
            addListeners();
        }
    }

	 	 function fadeUpInitial() {
			 if(showBkgrdImage){
				 $("#backgroundImage").fadeIn();
			 }else{
		 $("#topColor").fadeIn();
		  $("#bottomColor").fadeIn();
			 }
	 }
	 function fadeupEventLogo() {
		 $("#event_logo").fadeIn();
	 }
	 function fadeupFirstFrameContent() {
		$("#headline").fadeIn();
		$('#offers_model').fadeIn();
		$('#car-model').fadeIn();
		 $("#toy_logo").fadeIn();
        $("#toy_cta").fadeIn();
        $("#legal_copy").fadeIn();
	 }


    function fadeOutfirstFrame() {
		$("#headline").fadeOut();
		$("#headline_copy").fadeOut();
       $('#offers_model').fadeOut();
       $('#car-model').fadeOut();
		 $("#legal_copy").fadeOut();
    }



    function fadeUpViewDisclaimer() {
        $("#legal_disclaimer_copy").fadeIn();
    }

    function fadeUpOffer() {
		if (leaseOffer) {
		 document.getElementById("offer_year").innerHTML = leaseAnewCopy +"&nbsp;" +model_year;
		}
		var brand= document.getElementById('offers_model');
		brand.position = "absolute";		 
                    brand.style.left = 220+'px';
							 
                   // brand.style.left = 35+'px';
					$('#offers_model').fadeIn();
        $('#offers').fadeIn();
    }

    function initScoller() {
            var $scrollbar = document.getElementById("scrollbar1");
             scrollbar =  tinyscrollbar($scrollbar);
            $scrollbar.addEventListener("move", function() {}, false);
        }
        //Add Event Listeners

    function addListeners() {
        var main_exit_url_div;
        var ctaButton;
		var logo_exit_url_div;
					logo_exit_url_div = document.getElementById('toy_logo');
            logo_exit_url_div.addEventListener('click', function() {
                //  console.log(1 frame exit URL);
                Enabler.exitOverride('logo Exit', urlArray[3]);
            }, false);
        $('#main_exit_dc').css('display', 'block');
        if (showOfferFrame) {
            var legalButton = document.getElementById(
                'view_disclaimer_copy');
            legalButton.addEventListener('click', function() {
                //disclaimer_copy.style.visibility = "visibile";
                $('#disclaimer_copy').show();
                initScoller();
            }, false);
            var closeButton = document.getElementById('close_bttn');
            closeButton.addEventListener('click', function() {
                $('#disclaimer_copy').hide();
            }, false);
            ctaButton = document.getElementById('toy_cta');
            ctaButton.addEventListener('click', function() {
                //  console.log(ctaURL);
                Enabler.exitOverride('CTA_ Exit', urlArray[0]);
            }, false);
            //main exit covers whole banner bttn
            main_exit_url_div = document.getElementById('main_exit_dc');
            main_exit_url_div.addEventListener('click', function() {
                //  console.log(1 frame exit URL);
                Enabler.exitOverride('bkgrd Exit', offerURL);
            }, false);

        } else {
            ctaButton = document.getElementById('toy_cta');
            ctaButton.addEventListener('click', function() {
                //  console.log(ctaURL);
                Enabler.exitOverride('CTA_ Exit', urlArray[0]);
            }, false);
            //main exit covers whole banner bttn

            main_exit_url_div = document.getElementById('main_exit_dc');
            main_exit_url_div.addEventListener('click', function() {
                //  console.log(1 frame exit URL);
              Enabler.exitOverride('bkgrd Exit', urlArray[2]);
            }, false);
        }
    }
}
$(document).ready(function() {
    initBanner();
});