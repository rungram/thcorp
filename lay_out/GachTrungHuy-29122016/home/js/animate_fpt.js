function AnimateFPT(){var an=this;var M=$(window);var aD,g;var h=new createjs.LoadQueue();var Z=[];var aq=[],ap=[],ao=[],am=[],al=[],ak=[],ai=[],ah=[],af=[],f=[],e=[],d=[],b=[],a=[],aI=[],aH=[],aG=[],aF=[],aE=[],aw=[];var v,u,t,r,p,o,n,m,l,Y,X,W,U,T,S,R,Q,P,O,E;var aj;var H=jj=kk=ll=mm=nn=0;var A,z,y,x,w;var ag,ae,ac,ab,aa;var L,K,J,I,G,F,D,C,B,aC,aB,aA,az,ay,ax,av,au,at,ar;var N=true;var k=false;this.init=function(){$(window).load(function(){if($("#canvas-fr3").length>0){an.aniHome()}else{setTimeout(function(){$("#loading").fadeOut()},2000)}if($(".ani-gen").length>0){an.check_if_in_view($(".ani-gen"))}if($(".aniFromAround").length>0){an.check_if_in_view($(".aniFromAround"))}if($(".frame4 .img-bg").length>0){if($(window).scrollTop()>$(".frame4 .img-bg").offset().top-$(".frame4 .img-bg").height()/2){$(".ani-fpt").each(function(){var aJ=$(this);if(aJ.data("timeout")){window.setTimeout(function(){aJ.addClass("in-view")},parseInt(aJ.data("timeout")))}else{aJ.addClass("in-view")}})}}});$(window).scroll(function(){var aJ=$(window).scrollTop();if($(".ani-gen").length>0){an.check_if_in_view($(".ani-gen"))}if($(".aniFromAround").length>0){an.check_if_in_view($(".aniFromAround"))}if($("#canvas-fr3").length>0){if($(window).scrollTop()>$("#canvas-fr3").offset().top-$("#canvas-fr3").height()/2){if(N){$(".btn-canvas").trigger("click")}}}if($(".frame4 .img-bg").length>0){if($(window).scrollTop()>$(".frame4 .img-bg").offset().top-$(".frame4 .img-bg").height()/2){$(".ani-fpt").each(function(){var aK=$(this);if(aK.data("timeout")){window.setTimeout(function(){aK.addClass("in-view")},parseInt(aK.data("timeout")))}else{aK.addClass("in-view")}})}else{$(".ani-fpt").removeClass("in-view")}}});$(window).resize({})};this.aniHome=function(){h.on("complete",an.handleComplete,this);h.loadManifest([{id:"cv1",src:base_url+"Content/home/images/canvas/cv-1.png"},{id:"cv2-vn",src:base_url+"Content/home/images/canvas/cv-2-vn.png"},{id:"cv2",src:base_url+"Content/home/images/canvas/cv-2.png"},{id:"cv3",src:base_url+"Content/home/images/canvas/cv-3.png"},{id:"cv3",src:base_url+"Content/home/images/canvas/cv-3.png"},{id:"cv4",src:base_url+"Content/home/images/canvas/cv-4.png"},{id:"cv4-vn",src:base_url+"Content/home/images/canvas/cv-4-vn.png"},{id:"cv5",src:base_url+"Content/home/images/canvas/cv-5.png"},{id:"cv6",src:base_url+"Content/home/images/canvas/cv-6.png"},{id:"cv6-vn",src:base_url+"Content/home/images/canvas/cv-6-vn.png"},{id:"cv7",src:base_url+"Content/home/images/canvas/cv-7.png"},{id:"cv8",src:base_url+"Content/home/images/canvas/cv-8.png"},{id:"cv9",src:base_url+"Content/home/images/canvas/cv-9.png"},{id:"cv10",src:base_url+"Content/home/images/canvas/cv-10.png"},{id:"cv10-vn",src:base_url+"Content/home/images/canvas/cv-10-vn.png"},{id:"cv11",src:base_url+"Content/home/images/canvas/cv-11.png"},{id:"cv11-vn",src:base_url+"Content/home/images/canvas/cv-11-vn.png"},{id:"cv12",src:base_url+"Content/home/images/canvas/cv-12.png"},{id:"cv13",src:base_url+"Content/home/images/canvas/cv-13.png"},{id:"cv13-vn",src:base_url+"Content/home/images/canvas/cv-13-vn.png"},{id:"cv14",src:base_url+"Content/home/images/canvas/cv-14.png"},{id:"cv14-vn",src:base_url+"Content/home/images/canvas/cv-14-vn.png"},{id:"cv15",src:base_url+"Content/home/images/canvas/cv-15.png"},{id:"cv16",src:base_url+"Content/home/images/canvas/cv-16.png"},{id:"cv16-vn",src:base_url+"Content/home/images/canvas/cv-16-vn.png"},{id:"cv17",src:base_url+"Content/home/images/canvas/cv-17.png"},{id:"cv17-vn",src:base_url+"Content/home/images/canvas/cv-17-vn.png"},{id:"cv18",src:base_url+"Content/home/images/canvas/cv-18.png"},{id:"cv18-vn",src:base_url+"Content/home/images/canvas/cv-18-vn.png"},{id:"cv19",src:base_url+"Content/home/images/canvas/cv-19.png"}])};this.handleComplete=function(){aD=document.getElementById("canvas-fr3");g=new createjs.Stage(aD);an.initFrameThree()};this.initStage=function(){aD=document.getElementById("canvas-fr3");if(g!=null){g.autoClear=true;g.removeAllChildren();g.update();g.clear()}else{g=new createjs.Stage(aD)}g.update();createjs.Ticker.setFPS(60);createjs.Ticker.addEventListener("tick",g)};this.initFrameThree=function(){an.initStage();v=new createjs.Shape();v.graphics.setStrokeStyle(3);v.graphics.beginStroke("#b0b4b7");v.graphics.moveTo(737,435);g.addChild(v);u=new createjs.Shape();u.graphics.setStrokeStyle(3);u.graphics.beginStroke("#b0b4b7");u.graphics.moveTo(857,361);g.addChild(u);t=new createjs.Shape();t.graphics.setStrokeStyle(3);t.graphics.beginStroke("#b0b4b7");t.graphics.moveTo(779,317);g.addChild(t);r=new createjs.Shape();r.graphics.setStrokeStyle(3);r.graphics.beginStroke("#b0b4b7");r.graphics.moveTo(893,249);g.addChild(r);p=new createjs.Shape();p.graphics.setStrokeStyle(3);p.graphics.beginStroke("#b0b4b7");p.graphics.moveTo(798,197);g.addChild(p);o=new createjs.Shape();o.graphics.setStrokeStyle(3);o.graphics.beginStroke("#b0b4b7");o.graphics.moveTo(857,361);g.addChild(o);n=new createjs.Shape();n.graphics.setStrokeStyle(3);n.graphics.beginStroke("#b0b4b7");n.graphics.moveTo(704,518);g.addChild(n);m=new createjs.Shape();m.graphics.setStrokeStyle(3);m.graphics.beginStroke("#b0b4b7");m.graphics.moveTo(836,593);g.addChild(m);l=new createjs.Shape();l.graphics.setStrokeStyle(3);l.graphics.beginStroke("#b0b4b7");l.graphics.moveTo(836,593);g.addChild(l);Y=new createjs.Shape();Y.graphics.setStrokeStyle(3);Y.graphics.beginStroke("#b0b4b7");Y.graphics.moveTo(1047,708);g.addChild(Y);X=new createjs.Shape();X.graphics.setStrokeStyle(3);X.graphics.beginStroke("#b0b4b7");X.graphics.moveTo(504,480);g.addChild(X);W=new createjs.Shape();W.graphics.setStrokeStyle(3);W.graphics.beginStroke("#b0b4b7");W.graphics.moveTo(410,534);g.addChild(W);U=new createjs.Shape();U.graphics.setStrokeStyle(3);U.graphics.beginStroke("#b0b4b7");U.graphics.moveTo(410,534);g.addChild(U);T=new createjs.Shape();T.graphics.setStrokeStyle(3);T.graphics.beginStroke("#b0b4b7");T.graphics.moveTo(353,566);g.addChild(T);S=new createjs.Shape();S.graphics.setStrokeStyle(3);S.graphics.beginStroke("#b0b4b7");S.graphics.moveTo(353,566);g.addChild(S);R=new createjs.Shape();R.graphics.setStrokeStyle(3);R.graphics.beginStroke("#b0b4b7");R.graphics.moveTo(296,681);g.addChild(R);Q=new createjs.Shape();Q.graphics.setStrokeStyle(3);Q.graphics.beginStroke("#b0b4b7");Q.graphics.moveTo(371,738);g.addChild(Q);P=new createjs.Shape();P.graphics.setStrokeStyle(3);P.graphics.beginStroke("#b0b4b7");P.graphics.moveTo(529,399);g.addChild(P);O=new createjs.Shape();O.graphics.setStrokeStyle(3);O.graphics.beginStroke("#b0b4b7");O.graphics.moveTo(353,291);g.addChild(O);E=new createjs.Shape();E.graphics.setStrokeStyle(3);E.graphics.beginStroke("#b0b4b7");E.graphics.moveTo(353,291);g.addChild(E);var a2=h.getResult("cv1");L=new createjs.Bitmap(a2);L.x=466;L.y=323;g.addChild(L);var aX=new createjs.Graphics();aX.setStrokeStyle(1);aX.beginStroke(createjs.Graphics.getRGB(176,180,183));aX.beginFill(createjs.Graphics.getRGB(176,180,183));aX.drawCircle(0,0,7);aj=new createjs.Shape(aX);aj.x=855;aj.y=361;aj.alpha=0;g.addChild(aj);ag=new createjs.Shape();ag.graphics.beginFill("#b0b4b7").drawCircle(0,0,7);ag.x=410;ag.y=534;ag.alpha=0;g.addChild(ag);ae=new createjs.Shape();ae.graphics.beginFill("#b0b4b7").drawCircle(0,0,7);ae.x=353;ae.y=566;ae.alpha=0;g.addChild(ae);ac=new createjs.Shape();ac.graphics.beginFill("#b0b4b7").drawCircle(0,0,7);ac.x=371;ac.y=738;ac.alpha=0;g.addChild(ac);ab=new createjs.Shape();ab.graphics.beginFill("#b0b4b7").drawCircle(0,0,7);ab.x=353;ab.y=291;ab.alpha=0;g.addChild(ab);aa=new createjs.Shape();aa.graphics.beginFill("#b0b4b7").drawCircle(0,0,7);aa.x=836;aa.y=593;aa.alpha=0;g.addChild(aa);var a1;if($("body").hasClass("lg_vi")){a1=h.getResult("cv2-vn")}else{a1=h.getResult("cv2")}K=new createjs.Bitmap(a1);K.x=678;K.y=216;K.alpha=0;g.addChild(K);var a0=h.getResult("cv3");J=new createjs.Bitmap(a0);J.x=844;J.y=161;J.alpha=0;g.addChild(J);var aZ;if($("body").hasClass("lg_vi")){aZ=h.getResult("cv4-vn")}else{aZ=h.getResult("cv4")}I=new createjs.Bitmap(aZ);I.x=856;I.y=26;I.alpha=0;g.addChild(I);var aY=h.getResult("cv5");G=new createjs.Bitmap(aY);G.x=943;G.y=167;G.alpha=0;g.addChild(G);var aW;if($("body").hasClass("lg_vi")){aW=h.getResult("cv6-vn")}else{aW=h.getResult("cv6")}F=new createjs.Bitmap(aW);F.x=782;F.y=446;F.alpha=0;g.addChild(F);var aV=h.getResult("cv7");D=new createjs.Bitmap(aV);D.x=1019;D.y=438;D.alpha=0;g.addChild(D);var aU=h.getResult("cv8");C=new createjs.Bitmap(aU);C.x=862;C.y=600;C.alpha=0;g.addChild(C);var aT=h.getResult("cv9");B=new createjs.Bitmap(aT);B.x=1153;B.y=753;B.alpha=0;g.addChild(B);var aS;if($("body").hasClass("lg_vi")){aS=h.getResult("cv10-vn")}else{aS=h.getResult("cv10")}aC=new createjs.Bitmap(aS);aC.x=931;aC.y=530;aC.alpha=0;g.addChild(aC);var aR;if($("body").hasClass("lg_vi")){aR=h.getResult("cv11-vn")}else{aR=h.getResult("cv11")}aB=new createjs.Bitmap(aR);aB.x=926;aB.y=757;aB.alpha=0;g.addChild(aB);var aQ=h.getResult("cv12");aA=new createjs.Bitmap(aQ);aA.x=305;aA.y=394;aA.alpha=0;g.addChild(aA);var aP;if($("body").hasClass("lg_vi")){aP=h.getResult("cv13-vn")}else{aP=h.getResult("cv13")}az=new createjs.Bitmap(aP);az.x=467;az.y=574;az.alpha=0;g.addChild(az);var aO;if($("body").hasClass("lg_vi")){aO=h.getResult("cv14-vn")}else{aO=h.getResult("cv14")}ay=new createjs.Bitmap(aO);ay.x=91;ay.y=412;ay.alpha=0;g.addChild(ay);var aN=h.getResult("cv15");ax=new createjs.Bitmap(aN);ax.x=86;ax.y=541;ax.alpha=0;g.addChild(ax);var aM;if($("body").hasClass("lg_vi")){aM=h.getResult("cv16-vn")}else{aM=h.getResult("cv16")}av=new createjs.Bitmap(aM);av.x=69;av.y=723;av.alpha=0;g.addChild(av);var aL;if($("body").hasClass("lg_vi")){aL=h.getResult("cv17-vn")}else{aL=h.getResult("cv17")}au=new createjs.Bitmap(aL);au.x=76;au.y=249;au.alpha=0;g.addChild(au);var aK;if($("body").hasClass("lg_vi")){aK=h.getResult("cv18-vn")}else{aK=h.getResult("cv18")}at=new createjs.Bitmap(aK);at.x=211;at.y=42;at.alpha=0;g.addChild(at);var aJ=h.getResult("cv19");ar=new createjs.Bitmap(aJ);ar.x=0;ar.y=0;ar.alpha=0;g.addChild(ar);aq=(an.DDA(737,435,857,361));ap=(an.DDA(857,361,779,317));ao=(an.DDA(779,317,893,249));am=(an.DDA(893,249,798,197));al=(an.DDA(798,197,905,137));ak=(an.DDA(857,361,1003,275));ai=(an.DDA(704,518,836,593));ah=(an.DDA(836,593,889,624));af=(an.DDA(836,593,1028,475));f=(an.DDA(1047,708,1155,777));e=(an.DDA(504,480,410,534));d=(an.DDA(410,534,493,586));b=(an.DDA(410,534,353,566));a=(an.DDA(353,566,238,500));aI=(an.DDA(353,566,306,595));aH=(an.DDA(296,681,371,738));aG=(an.DDA(371,738,283,797));aF=(an.DDA(529,399,353,291));aE=(an.DDA(353,291,149,168));aw=(an.DDA(353,291,196,384));g.update();if(A){clearInterval(A)}if(z){clearInterval(z)}if(y){clearInterval(y)}if(x){clearInterval(x)}if(w){clearInterval(w)}$(".btn-canvas").click(function(){an.aniDraw()});$("#loading").fadeOut(function(){if($(window).scrollTop()>$("#canvas-fr3").offset().top-$("#canvas-fr3").height()/2){$(".btn-canvas").trigger("click")}})};this.aniAllPage=function(){M.on("scroll resize",an.check_if_in_view($(".ani-gen")));M.on("scroll resize",an.check_if_in_view($(".wr-canvas")))};this.check_if_in_view=function(aM){var aL=aM;var aN=$(window);var aK=aN.height();var aO=aN.scrollTop();var aJ=(aO+aK);$.each(aL,function(){var aQ=$(this);var aS=aQ.outerHeight();var aR=aQ.offset().top;var aP=(aR+aS);if((aP>=aO)&&(aR<=aJ)){if(aQ.data("timeout")){window.setTimeout(function(){aQ.addClass("in-view")},parseInt(aQ.data("timeout")))}else{aQ.addClass("in-view")}aQ.find(".fromLeft").addClass("run-animate");aQ.find(".fromRight").addClass("run-animate")}else{if(aR>aJ){aQ.removeClass("in-view");aQ.find(".fromLeft").removeClass("run-animate");aQ.find(".fromRight").removeClass("run-animate");$(".frame4 .img-bg .it-1").removeClass("active")}else{}}})};this.handleResize=function(){var aJ=$(".wr-canvas").width();var aM=$(".wr-canvas").height();g.canvas.width=aJ;g.canvas.height=aM;var aL=100/100;var aK=aJ/aM;var aN=aJ/100;if(aK>aL){aN=aM/100}c.scaleX=c.scaleY=aN;c.x=aJ/2;c.y=aM/2;g.update()};this.aniDraw=function(){N=false;i(1);q(7);s(11);ad(18);ctx=aD.getContext("2d");ctx.lineWidth=5;createjs.Tween.get(aj).wait(aq.length*10).to({alpha:1},850);g.update()};function i(aM){var aJ,aK;var aL=j=0;if(A){clearInterval(A)}switch(aM){case 1:aJ=v;aK=aq;break;case 2:aJ=u;aK=ap;V(6);break;case 3:aJ=t;aK=ao;break;case 4:aJ=r;aK=am;break;case 5:aJ=p;aK=al;break;case 6:aJ=o;aK=ak;break}A=setInterval(function(){if(aL<aK.length-1){aL++;aJ.graphics.lineTo(aK[aL].x,aK[aL].y)}else{aJ.graphics.endStroke();if(aM==2){createjs.Tween.get(K).to({alpha:1},500)}if(aM==4){createjs.Tween.get(J).to({alpha:1},500)}if(aM==5){createjs.Tween.get(I).to({alpha:1},500)}if(aM<5){aM=aM+1;i(aM)}else{if(A){clearInterval(A)}}}},1)}function q(aM){var aJ,aL;var aK=j=0;if(y){clearInterval(y)}switch(aM){case 7:aJ=n;aL=ai;break;case 8:aJ=m;aL=ah;V(9);break;case 9:break;case 10:aJ=Y;aL=f;break}y=setInterval(function(){if(aK<aL.length-1){aK++;aJ.graphics.lineTo(aL[aK].x,aL[aK].y)}else{aJ.graphics.endStroke();if(aM==7){createjs.Tween.get(F).to({alpha:1},500);createjs.Tween.get(aa).to({alpha:1},500)}if(aM==8){createjs.Tween.get(C).to({alpha:1},500);createjs.Tween.get(aC).to({alpha:1},500)}if(aM==10){createjs.Tween.get(B).to({alpha:1},500);createjs.Tween.get(aB).to({alpha:1},500);createjs.Tween.get(ac).to({alpha:1},500)}if(aM<10){if(aM==8){aM=aM+2}else{aM=aM+1}q(aM)}else{if(A){clearInterval(y)}}}},1)}function ad(aM){var aJ,aL;var aK=j=0;if(w){clearInterval(w)}switch(aM){case 18:aJ=P;aL=aF;break;case 19:aJ=O;aL=aE;V(20);break}w=setInterval(function(){if(aK<aL.length-1){aK++;aJ.graphics.lineTo(aL[aK].x,aL[aK].y)}else{aJ.graphics.endStroke();if(aM==18){createjs.Tween.get(au).to({alpha:1},500);createjs.Tween.get(ab).to({alpha:1},500)}if(aM==19){createjs.Tween.get(at).to({alpha:1},500)}if(aM<19){aM=aM+1;ad(aM)}else{if(A){clearInterval(w)}}}},1)}function s(aM){var aJ,aL;var aK=j=0;if(x){clearInterval(x)}switch(aM){case 11:aJ=X;aL=e;break;case 12:aJ=W;aL=d;V(13);break;case 14:aJ=T;aL=a;V(15);break;case 16:aJ=R;aL=aH;break;case 17:aJ=Q;aL=aG;break}x=setInterval(function(){if(aK<aL.length-1){aK++;aJ.graphics.lineTo(aL[aK].x,aL[aK].y)}else{aJ.graphics.endStroke();if(aM==11){createjs.Tween.get(aA).to({alpha:1},500);createjs.Tween.get(ag).to({alpha:1},500)}if(aM==14){createjs.Tween.get(ay).to({alpha:1},500)}if(aM==17){createjs.Tween.get(av).to({alpha:1},500)}if(aM<17){if(aM==12||aM==14){aM=aM+2}else{aM=aM+1}s(aM)}else{if(A){clearInterval(x)}}}},1)}function V(aN){var aJ,aK;var aM=j=0;var aL;switch(aN){case 6:aJ=o;aK=ak;break;case 9:aJ=l;aK=af;break;case 13:aJ=U;aK=b;break;case 15:aJ=S;aK=aI;break;case 20:aJ=E;aK=aw;break}if(aL){clearInterval(aL)}aL=setInterval(function(){if(aM<aK.length-1){aM++;aJ.graphics.lineTo(aK[aM].x,aK[aM].y)}else{aJ.graphics.endStroke();if(aN==6){createjs.Tween.get(G).to({alpha:1},500)}if(aN==9){createjs.Tween.get(D).to({alpha:1},500)}if(aN==13){createjs.Tween.get(az).to({alpha:1},500);createjs.Tween.get(ae).to({alpha:1},500)}if(aN==15){createjs.Tween.get(ax).to({alpha:1},500)}if(aN==20){createjs.Tween.get(ar).to({alpha:1},500)}clearInterval(aL)}},1)}this.DDA=function(aN,aU,aL,aS){var aM=aL-aN,aT=aL-aN,aK=aS-aU,aR=aS-aU;var aO=[];var aP;if(aK<0){aK=-aK}if(aM<0){aM=-aM}if(aM>aK){aP=aM}else{aP=aK}var aQ=1;var aJ=parseFloat(aT/aP);var aV=parseFloat(aR/aP);while(aQ<=aP){if(aQ<aP){aN=parseFloat(aN+aJ);aU=parseFloat(aU+aV);aO.push({x:aN,y:aU})}aQ++}return aO}}AnimateFPT=new AnimateFPT();$(function(){AnimateFPT.init()});