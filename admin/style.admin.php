<?php header("Content-type:text/css");?>
/******************************/
<?php
 //create database login info
 include_once("../functions.php");
 include("../config.php");
?>

<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_admin");
  
 $row = mysql_fetch_array($data);

$bmartop	= $row['BodyMarginTop'];
$bmarrt = $row['BodyMarginRight'];
$bmarbot =$row['BodyMarginBottom'];
$bmarlt	=$row['BodyMarginLeft'];
$bcolor	=$row['BodyColor'];
$bbgc	=$row['BodyBackgroundColor'];
$bbgr	=$row['BodyBackgroundRepeat'];
$bbga	=$row['BodyBackgroundAttachment'];
$bbgp	=$row['BodyBackgroundPosition'];
$bh	=$row['BodyHeight'];
$bdisp	=$row['BodyDisplay'];

$fullbgc	=$row['FullBackgroundColor'];
$fullbgr	=$row['FullBackgroundRepeat'];
$fullbga	=$row['FullBackgroundAttachment'];
$fullbgp	=$row['FullBackgroundPosition'];
$fullc	=$row['FullColor'];
$fullls	=$row['FullLetterSpacing'];
$fulllh	=$row['FullLineHeight'];
$fullta	=$row['FullTextAlign'];
$fulltd	=$row['FullTextDecoration'];
$fullti	=$row['FullTextIndent'];
$fulltt	=$row['FullTextTransform'];
$fullva	=$row['FullVerticalAlign'];
$fullwhs	=$row['FullWhiteSpace'];
$fullwos	=$row['FullWordSpacing'];
$fullff	=$row['FullFontFamily'];
$fullfsize	=$row['FullFontSize'];
$fullfstyle	=$row['FullFontStyle'];
$fullfv	=$row['FullFontVariant'];
$fullfw	=$row['FullFontWeight'];
$fullalc	=$row['FullaLinkColor'];
$fullaltd	=$row['FullaLinkTextDecoration'];
$fullavc	=$row['FullaVisitedColor'];
$fullavtd	=$row['FullaVisitedDecoration'];
$fullahc	=$row['FullaHoverColor'];
$fullahtd	=$row['FullaHoverTextDecoration'];
$fullaac	=$row['FullaActiveColor'];
$fullaatd	=$row['FullaActiveTextDecoration'];
$fulllsi	=$row['FullListStyleImage'];
$fulllsp	=$row['FullListStylePosition'];
$fulllst	=$row['FullListStyleType'];
$fullbtt	=$row['FullBorderTopThickness'];
$fullbts	=$row['FullBorderTopStyle'];
$fullbtc	=$row['FullBorderTopColor'];
$fullbrt	=$row['FullBorderRightThickness'];
$fullbrs	=$row['FullBorderRightStyle'];
$fullbrc	=$row['FullBorderRightColor'];
$fullbbt	=$row['FullBorderBottomThickness'];
$fullbbs	=$row['FullBorderBottomStyle'];
$fullbbc	=$row['FullBorderBottomColor'];
$fullblt	=$row['FullBorderLeftThickness'];
$fullbls	=$row['FullBorderLeftStyle'];
$fullblc	=$row['FullBorderLeftColor'];
$fullout	=$row['FullOutline'];
$fullmarg	=$row['FullMargin'];
$fullpad	=$row['FullPadding'];
$fullh	=$row['FullHeight'];
$fullmaxh	=$row['FullMaxHeight'];
$fullmaxw	=$row['FullMaxWidth'];
$fullminh	=$row['FullMinHeight'];
$fullminw	=$row['FullMinWidth'];
$fullw	=$row['FullWidth'];
$fullvis	=$row['FullVisibility'];
$fulldisp	=$row['FullDisplay'];
$fullpos	=$row['FullPosition'];
$fullleft	=$row['FullLeft'];
$fulltop	=$row['FullTop'];
$fullright	=$row['FullRight'];
$fullbot	=$row['FullBottom'];
$fullzind	=$row['FullZIndex'];
$fullfloat	=$row['FullFloat'];
$fullclr	=$row['FullClear'];

$hfullbgc	=$row['HFullBackgroundColor'];
$hfullbgr	=$row['HFullBackgroundRepeat'];
$hfullbga	=$row['HFullBackgroundAttachment'];
$hfullbgp	=$row['HFullBackgroundPosition'];
$hfullc	=$row['HFullColor'];
$hfullls	=$row['HFullLetterSpacing'];
$hfulllh	=$row['HFullLineHeight'];
$hfullta	=$row['HFullTextAlign'];
$hfulltd	=$row['HFullTextDecoration'];
$hfullti	=$row['HFullTextIndent'];
$hfulltt	=$row['HFullTextTransform'];
$hfullva	=$row['HFullVerticalAlign'];
$hfullwhs	=$row['HFullWhiteSpace'];
$hfullwos	=$row['HFullWordSpacing'];
$hfullff	=$row['HFullFontFamily'];
$hfullfsize	=$row['HFullFontSize'];
$hfullfstyle	=$row['HFullFontStyle'];
$hfullfv	=$row['HFullFontVariant'];
$hfullfw	=$row['HFullFontWeight'];
$hfullalc	=$row['HFullaLinkColor'];
$hfullaltd	=$row['HFullaLinkTextDecoration'];
$hfullavc	=$row['HFullaVisitedColor'];
$hfullavtd	=$row['HFullaVisitedDecoration'];
$hfullahc	=$row['HFullaHoverColor'];
$hfullahtd	=$row['HFullaHoverTextDecoration'];
$hfullaac	=$row['HFullaActiveColor'];
$hfullaatd	=$row['HFullaActiveTextDecoration'];
$hfulllsi	=$row['HFullListStyleImage'];
$hfulllsp	=$row['HFullListStylePosition'];
$hfulllst	=$row['HFullListStyleType'];
$hfullbtt	=$row['HFullBorderTopThickness'];
$hfullbts	=$row['HFullBorderTopStyle'];
$hfullbtc	=$row['HFullBorderTopColor'];
$hfullbrt	=$row['HFullBorderRightThickness'];
$hfullbrs	=$row['HFullBorderRightStyle'];
$hfullbrc	=$row['HFullBorderRightColor'];
$hfullbbt	=$row['HFullBorderBottomThickness'];
$hfullbbs	=$row['HFullBorderBottomStyle'];
$hfullbbc	=$row['HFullBorderBottomColor'];
$hfullblt	=$row['HFullBorderLeftThickness'];
$hfullbls	=$row['HFullBorderLeftStyle'];
$hfullblc	=$row['HFullBorderLeftColor'];
$hfullout	=$row['HFullOutline'];
$hfullmarg	=$row['HFullMargin'];
$hfullpad	=$row['HFullPadding'];
$hfullh	=$row['HFullHeight'];
$hfullmaxh	=$row['HFullMaxHeight'];
$hfullmaxw	=$row['HFullMaxWidth'];
$hfullminh	=$row['HFullMinHeight'];
$hfullminw	=$row['HFullMinWidth'];
$hfullw	=$row['HFullWidth'];
$hfullvis	=$row['HFullVisibility'];
$hfulldisp	=$row['HFullDisplay'];
$hfullpos	=$row['HFullPosition'];
$hfullleft	=$row['HFullLeft'];
$hfulltop	=$row['HFullTop'];
$hfullright	=$row['HFullRight'];
$hfullbot	=$row['HFullBottom'];
$hfullzind	=$row['HFullZIndex'];
$hfullfloat	=$row['HFullFloat'];
$hfullclr	=$row['HFullClear'];

$hflbgc	=$row['HFloatBackgroundColor'];
$hflbgr	=$row['HFloatBackgroundRepeat'];
$hflbga	=$row['HFloatBackgroundAttachment'];
$hflbgp	=$row['HFloatBackgroundPosition'];
$hflc	=$row['HFloatColor'];
$hflls	=$row['HFloatLetterSpacing'];
$hfllh	=$row['HFloatLineHeight'];
$hflta	=$row['HFloatTextAlign'];
$hfltd	=$row['HFloatTextDecoration'];
$hflti	=$row['HFloatTextIndent'];
$hfltt	=$row['HFloatTextTransform'];
$hflva	=$row['HFloatVerticalAlign'];
$hflwhs	=$row['HFloatWhiteSpace'];
$hflwos	=$row['HFloatWordSpacing'];
$hflff	=$row['HFloatFontFamily'];
$hflfsize	=$row['HFloatFontSize'];
$hflfstyle	=$row['HFloatFontStyle'];
$hflfv	=$row['HFloatFontVariant'];
$hflfw	=$row['HFloatFontWeight'];
$hflalc	=$row['HFloataLinkColor'];
$hflaltd	=$row['HFloataLinkTextDecoration'];
$hflavc	=$row['HFloataVisitedColor'];
$hflavtd	=$row['HFloataVisitedDecoration'];
$hflahc	=$row['HFloataHoverColor'];
$hflahtd	=$row['HFloataHoverTextDecoration'];
$hflaac	=$row['HFloataActiveColor'];
$hflaatd	=$row['HFloataActiveTextDecoration'];
$hfllsi	=$row['HFloatListStyleImage'];
$hfllsp	=$row['HFloatListStylePosition'];
$hfllst	=$row['HFloatListStyleType'];
$hflbtt	=$row['HFloatBorderTopThickness'];
$hflbts	=$row['HFloatBorderTopStyle'];
$hflbtc	=$row['HFloatBorderTopColor'];
$hflbrt	=$row['HFloatBorderRightThickness'];
$hflbrs	=$row['HFloatBorderRightStyle'];
$hflbrc	=$row['HFloatBorderRightColor'];
$hflbbt	=$row['HFloatBorderBottomThickness'];
$hflbbs	=$row['HFloatBorderBottomStyle'];
$hflbbc	=$row['HFloatBorderBottomColor'];
$hflblt	=$row['HFloatBorderLeftThickness'];
$hflbls	=$row['HFloatBorderLeftStyle'];
$hflblc	=$row['HFloatBorderLeftColor'];
$hflout	=$row['HFloatOutline'];
$hflmarg	=$row['HFloatMargin'];
$hflpad	=$row['HFloatPadding'];
$hflh	=$row['HFloatHeight'];
$hflmaxh	=$row['HFloatMaxHeight'];
$hflmaxw	=$row['HFloatMaxWidth'];
$hflminh	=$row['HFloatMinHeight'];
$hflminw	=$row['HFloatMinWidth'];
$hflw	=$row['HFloatWidth'];
$hflvis	=$row['HFloatVisibility'];
$hfldisp	=$row['HFloatDisplay'];
$hflpos	=$row['HFloatPosition'];
$hflleft	=$row['HFloatLeft'];
$hfltop	=$row['HFloatTop'];
$hflright	=$row['HFloatRight'];
$hflbot	=$row['HFloatBottom'];
$hflzind	=$row['HFloatZIndex'];
$hflfloat	=$row['HFloatFloat'];
$hflclr	=$row['HFloatClear'];

$bfullbgc	=$row['BFullBackgroundColor'];
$bfullbgr	=$row['BFullBackgroundRepeat'];
$bfullbga	=$row['BFullBackgroundAttachment'];
$bfullbgp	=$row['BFullBackgroundPosition'];
$bfullc	=$row['BFullColor'];
$bfullls	=$row['BFullLetterSpacing'];
$bfulllh	=$row['BFullLineHeight'];
$bfullta	=$row['BFullTextAlign'];
$bfulltd	=$row['BFullTextDecoration'];
$bfullti	=$row['BFullTextIndent'];
$bfulltt	=$row['BFullTextTransform'];
$bfullva	=$row['BFullVerticalAlign'];
$bfullwhs	=$row['BFullWhiteSpace'];
$bfullwos	=$row['BFullWordSpacing'];
$bfullff	=$row['BFullFontFamily'];
$bfullfsize	=$row['BFullFontSize'];
$bfullfstyle	=$row['BFullFontStyle'];
$bfullfv	=$row['BFullFontVariant'];
$bfullfw	=$row['BFullFontWeight'];
$bfullalc	=$row['BFullaLinkColor'];
$bfullaltd	=$row['BFullaLinkTextDecoration'];
$bfullavc	=$row['BFullaVisitedColor'];
$bfullavtd	=$row['BFullaVisitedDecoration'];
$bfullahc	=$row['BFullaHoverColor'];
$bfullahtd	=$row['BFullaHoverTextDecoration'];
$bfullaac	=$row['BFullaActiveColor'];
$bfullaatd	=$row['BFullaActiveTextDecoration'];
$bfulllsi	=$row['BFullListStyleImage'];
$bfulllsp	=$row['BFullListStylePosition'];
$bfulllst	=$row['BFullListStyleType'];
$bfullbtt	=$row['BFullBorderTopThickness'];
$bfullbts	=$row['BFullBorderTopStyle'];
$bfullbtc	=$row['BFullBorderTopColor'];
$bfullbrt	=$row['BFullBorderRightThickness'];
$bfullbrs	=$row['BFullBorderRightStyle'];
$bfullbrc	=$row['BFullBorderRightColor'];
$bfullbbt	=$row['BFullBorderBottomThickness'];
$bfullbbs	=$row['BFullBorderBottomStyle'];
$bfullbbc	=$row['BFullBorderBottomColor'];
$bfullblt	=$row['BFullBorderLeftThickness'];
$bfullbls	=$row['BFullBorderLeftStyle'];
$bfullblc	=$row['BFullBorderLeftColor'];
$bfullout	=$row['BFullOutline'];
$bfullmarg	=$row['BFullMargin'];
$bfullpad	=$row['BFullPadding'];
$bfullh	=$row['BFullHeight'];
$bfullmaxh	=$row['BFullMaxHeight'];
$bfullmaxw	=$row['BFullMaxWidth'];
$bfullminh	=$row['BFullMinHeight'];
$bfullminw	=$row['BFullMinWidth'];
$bfullw	=$row['BFullWidth'];
$bfullvis	=$row['BFullVisibility'];
$bfulldisp	=$row['BFullDisplay'];
$bfullpos	=$row['BFullPosition'];
$bfullleft	=$row['BFullLeft'];
$bfulltop	=$row['BFullTop'];
$bfullright	=$row['BFullRight'];
$bfullbot	=$row['BFullBottom'];
$bfullzind	=$row['BFullZIndex'];
$bfullfloat	=$row['BFullFloat'];
$bfullclr	=$row['BFullClear'];

$bflbgc	=$row['BFloatBackgroundColor'];
$bflbgr	=$row['BFloatBackgroundRepeat'];
$bflbga	=$row['BFloatBackgroundAttachment'];
$bflbgp	=$row['BFloatBackgroundPosition'];
$bflc	=$row['BFloatColor'];
$bflls	=$row['BFloatLetterSpacing'];
$bfllh	=$row['BFloatLineHeight'];
$bflta	=$row['BFloatTextAlign'];
$bfltd	=$row['BFloatTextDecoration'];
$bflti	=$row['BFloatTextIndent'];
$bfltt	=$row['BFloatTextTransform'];
$bflva	=$row['BFloatVerticalAlign'];
$bflwhs	=$row['BFloatWhiteSpace'];
$bflwos	=$row['BFloatWordSpacing'];
$bflff	=$row['BFloatFontFamily'];
$bflfsize	=$row['BFloatFontSize'];
$bflfstyle	=$row['BFloatFontStyle'];
$bflfv	=$row['BFloatFontVariant'];
$bflfw	=$row['BFloatFontWeight'];
$bflalc	=$row['BFloataLinkColor'];
$bflaltd	=$row['BFloataLinkTextDecoration'];
$bflavc	=$row['BFloataVisitedColor'];
$bflavtd	=$row['BFloataVisitedDecoration'];
$bflahc	=$row['BFloataHoverColor'];
$bflahtd	=$row['BFloataHoverTextDecoration'];
$bflaac	=$row['BFloataActiveColor'];
$bflaatd	=$row['BFloataActiveTextDecoration'];
$bfllsi	=$row['BFloatListStyleImage'];
$bfllsp	=$row['BFloatListStylePosition'];
$bfllst	=$row['BFloatListStyleType'];
$bflbtt	=$row['BFloatBorderTopThickness'];
$bflbts	=$row['BFloatBorderTopStyle'];
$bflbtc	=$row['BFloatBorderTopColor'];
$bflbrt	=$row['BFloatBorderRightThickness'];
$bflbrs	=$row['BFloatBorderRightStyle'];
$bflbrc	=$row['BFloatBorderRightColor'];
$bflbbt	=$row['BFloatBorderBottomThickness'];
$bflbbs	=$row['BFloatBorderBottomStyle'];
$bflbbc	=$row['BFloatBorderBottomColor'];
$bflblt	=$row['BFloatBorderLeftThickness'];
$bflbls	=$row['BFloatBorderLeftStyle'];
$bflblc	=$row['BFloatBorderLeftColor'];
$bflout	=$row['BFloatOutline'];
$bflmarg	=$row['BFloatMargin'];
$bflpad	=$row['BFloatPadding'];
$bflh	=$row['BFloatHeight'];
$bflmaxh	=$row['BFloatMaxHeight'];
$bflmaxw	=$row['BFloatMaxWidth'];
$bflminh	=$row['BFloatMinHeight'];
$bflminw	=$row['BFloatMinWidth'];
$bflw	=$row['BFloatWidth'];
$bflvis	=$row['BFloatVisibility'];
$bfldisp	=$row['BFloatDisplay'];
$bflpos	=$row['BFloatPosition'];
$bflleft	=$row['BFloatLeft'];
$bfltop	=$row['BFloatTop'];
$bflright	=$row['BFloatRight'];
$bflbot	=$row['BFloatBottom'];
$bflzind	=$row['BFloatZIndex'];
$bflfloat	=$row['BFloatFloat'];
$bflclr	=$row['BFloatClear'];

$nbgc	=$row['NavbarBackgroundColor'];
$nbgr	=$row['NavbarBackgroundRepeat'];
$nbga	=$row['NavbarBackgroundAttachment'];
$nbgp	=$row['NavbarBackgroundPosition'];
$nc	=$row['NavbarColor'];
$nls	=$row['NavbarLetterSpacing'];
$nlh	=$row['NavbarLineHeight'];
$nta	=$row['NavbarTextAlign'];
$ntd	=$row['NavbarTextDecoration'];
$nti	=$row['NavbarTextIndent'];
$ntt	=$row['NavbarTextTransform'];
$nva	=$row['NavbarVerticalAlign'];
$nwhs	=$row['NavbarWhiteSpace'];
$nwos	=$row['NavbarWordSpacing'];
$nff	=$row['NavbarFontFamily'];
$nfsize	=$row['NavbarFontSize'];
$nfstyle	=$row['NavbarFontStyle'];
$nfv	=$row['NavbarFontVariant'];
$nfw	=$row['NavbarFontWeight'];
$nalc	=$row['NavbaraLinkColor'];
$naltd	=$row['NavbaraLinkTextDecoration'];
$navc	=$row['NavbaraVisitedColor'];
$navtd	=$row['NavbaraVisitedDecoration'];
$nahc	=$row['NavbaraHoverColor'];
$nahtd	=$row['NavbaraHoverTextDecoration'];
$naac	=$row['NavbaraActiveColor'];
$naatd	=$row['NavbaraActiveTextDecoration'];
$nlsi	=$row['NavbarListStyleImage'];
$nlsp	=$row['NavbarListStylePosition'];
$nlst	=$row['NavbarListStyleType'];
$nbtt	=$row['NavbarBorderTopThickness'];
$nbts	=$row['NavbarBorderTopStyle'];
$nbtc	=$row['NavbarBorderTopColor'];
$nbrt	=$row['NavbarBorderRightThickness'];
$nbrs	=$row['NavbarBorderRightStyle'];
$nbrc	=$row['NavbarBorderRightColor'];
$nbbt	=$row['NavbarBorderBottomThickness'];
$nbbs	=$row['NavbarBorderBottomStyle'];
$nbbc	=$row['NavbarBorderBottomColor'];
$nblt	=$row['NavbarBorderLeftThickness'];
$nbls	=$row['NavbarBorderLeftStyle'];
$nblc	=$row['NavbarBorderLeftColor'];
$nout	=$row['NavbarOutline'];
$nmarg	=$row['NavbarMargin'];
$npad	=$row['NavbarPadding'];
$nh	=$row['NavbarHeight'];
$nmaxh	=$row['NavbarMaxHeight'];
$nmaxw	=$row['NavbarMaxWidth'];
$nminh	=$row['NavbarMinHeight'];
$nminw	=$row['NavbarMinWidth'];
$nw	=$row['NavbarWidth'];
$nvis	=$row['NavbarVisibility'];
$ndisp	=$row['NavbarDisplay'];
$npos	=$row['NavbarPosition'];
$nleft	=$row['NavbarLeft'];
$ntop	=$row['NavbarTop'];
$nright	=$row['NavbarRight'];
$nbot	=$row['NavbarBottom'];
$nzind	=$row['NavbarZIndex'];
$nfloat	=$row['NavbarFloat'];
$nclr	=$row['NavbarClear'];

$pbgc	=$row['PageBackgroundColor'];
$pbgr	=$row['PageBackgroundRepeat'];
$pbga	=$row['PageBackgroundAttachment'];
$pbgp	=$row['PageBackgroundPosition'];
$pc	=$row['PageColor'];
$pls	=$row['PageLetterSpacing'];
$plh	=$row['PageLineHeight'];
$pta	=$row['PageTextAlign'];
$ptd	=$row['PageTextDecoration'];
$pti	=$row['PageTextIndent'];
$ptt	=$row['PageTextTransform'];
$pva	=$row['PageVerticalAlign'];
$pwhs	=$row['PageWhiteSpace'];
$pwos	=$row['PageWordSpacing'];
$pff	=$row['PageFontFamily'];
$pfsize	=$row['PageFontSize'];
$pfstyle	=$row['PageFontStyle'];
$pfv	=$row['PageFontVariant'];
$pfw	=$row['PageFontWeight'];
$palc	=$row['PageaLinkColor'];
$paltd	=$row['PageaLinkTextDecoration'];
$pavc	=$row['PageaVisitedColor'];
$pavtd	=$row['PageaVisitedDecoration'];
$pahc	=$row['PageaHoverColor'];
$pahtd	=$row['PageaHoverTextDecoration'];
$paac	=$row['PageaActiveColor'];
$paatd	=$row['PageaActiveTextDecoration'];
$plsi	=$row['PageListStyleImage'];
$plsp	=$row['PageListStylePosition'];
$plst	=$row['PageListStyleType'];
$pbtt	=$row['PageBorderTopThickness'];
$pbts	=$row['PageBorderTopStyle'];
$pbtc	=$row['PageBorderTopColor'];
$pbrt	=$row['PageBorderRightThickness'];
$pbrs	=$row['PageBorderRightStyle'];
$pbrc	=$row['PageBorderRightColor'];
$pbbt	=$row['PageBorderBottomThickness'];
$pbbs	=$row['PageBorderBottomStyle'];
$pbbc	=$row['PageBorderBottomColor'];
$pblt	=$row['PageBorderLeftThickness'];
$pbls	=$row['PageBorderLeftStyle'];
$pblc	=$row['PageBorderLeftColor'];
$pout	=$row['PageOutline'];
$pmarg	=$row['PageMargin'];
$ppad	=$row['PagePadding'];
$ph	=$row['PageHeight'];
$pmaxh	=$row['PageMaxHeight'];
$pmaxw	=$row['PageMaxWidth'];
$pminh	=$row['PageMinHeight'];
$pminw	=$row['PageMinWidth'];
$pw	=$row['PageWidth'];
$pvis	=$row['PageVisibility'];
$pdisp	=$row['PageDisplay'];
$ppos	=$row['PagePosition'];
$pleft	=$row['PageLeft'];
$ptop	=$row['PageTop'];
$pright	=$row['PageRight'];
$pbot	=$row['PageBottom'];
$pzind	=$row['PageZIndex'];
$pfloat	=$row['PageFloat'];
$pclr	=$row['PageClear'];

$nrbgc	=$row['NavbarRightBackgroundColor'];
$nrbgr	=$row['NavbarRightBackgroundRepeat'];
$nrbga	=$row['NavbarRightBackgroundAttachment'];
$nrbgp	=$row['NavbarRightBackgroundPosition'];
$nrc	=$row['NavbarRightColor'];
$nrls	=$row['NavbarRightLetterSpacing'];
$nrlh	=$row['NavbarRightLineHeight'];
$nrta	=$row['NavbarRightTextAlign'];
$nrtd	=$row['NavbarRightTextDecoration'];
$nrti	=$row['NavbarRightTextIndent'];
$nrtt	=$row['NavbarRightTextTransform'];
$nrva	=$row['NavbarRightVerticalAlign'];
$nrwhs	=$row['NavbarRightWhiteSpace'];
$nrwos	=$row['NavbarRightWordSpacing'];
$nrff	=$row['NavbarRightFontFamily'];
$nrfsize	=$row['NavbarRightFontSize'];
$nrfstyle	=$row['NavbarRightFontStyle'];
$nrfv	=$row['NavbarRightFontVariant'];
$nrfw	=$row['NavbarRightFontWeight'];
$nralc	=$row['NavbarRightaLinkColor'];
$nraltd	=$row['NavbarRightaLinkTextDecoration'];
$nravc	=$row['NavbarRightaVisitedColor'];
$nravtd	=$row['NavbarRightaVisitedDecoration'];
$nrahc	=$row['NavbarRightaHoverColor'];
$nrahtd	=$row['NavbarRightaHoverTextDecoration'];
$nraac	=$row['NavbarRightaActiveColor'];
$nraatd	=$row['NavbarRightaActiveTextDecoration'];
$nrlsi	=$row['NavbarRightListStyleImage'];
$nrlsp	=$row['NavbarRightListStylePosition'];
$nrlst	=$row['NavbarRightListStyleType'];
$nrbtt	=$row['NavbarRightBorderTopThickness'];
$nrbts	=$row['NavbarRightBorderTopStyle'];
$nrbtc	=$row['NavbarRightBorderTopColor'];
$nrbrt	=$row['NavbarRightBorderRightThickness'];
$nrbrs	=$row['NavbarRightBorderRightStyle'];
$nrbrc	=$row['NavbarRightBorderRightColor'];
$nrbbt	=$row['NavbarRightBorderBottomThickness'];
$nrbbs	=$row['NavbarRightBorderBottomStyle'];
$nrbbc	=$row['NavbarRightBorderBottomColor'];
$nrblt	=$row['NavbarRightBorderLeftThickness'];
$nrbls	=$row['NavbarRightBorderLeftStyle'];
$nrblc	=$row['NavbarRightBorderLeftColor'];
$nrout	=$row['NavbarRightOutline'];
$nrmarg	=$row['NavbarRightMargin'];
$nrpad	=$row['NavbarRightPadding'];
$nrh	=$row['NavbarRightHeight'];
$nrmaxh	=$row['NavbarRightMaxHeight'];
$nrmaxw	=$row['NavbarRightMaxWidth'];
$nrminh	=$row['NavbarRightMinHeight'];
$nrminw	=$row['NavbarRightMinWidth'];
$nrw	=$row['NavbarRightWidth'];
$nrvis	=$row['NavbarRightVisibility'];
$nrdisp	=$row['NavbarRightDisplay'];
$nrpos	=$row['NavbarRightPosition'];
$nrleft	=$row['NavbarRightLeft'];
$nrtop	=$row['NavbarRightTop'];
$nrright	=$row['NavbarRightRight'];
$nrbot	=$row['NavbarRightBottom'];
$nrzind	=$row['NavbarRightZIndex'];
$nrfloat	=$row['NavbarRightFloat'];
$nrclr	=$row['NavbarRightClear'];

$ffullbgc	=$row['FFullBackgroundColor'];
$ffullbgr	=$row['FFullBackgroundRepeat'];
$ffullbga	=$row['FFullBackgroundAttachment'];
$ffullbgp	=$row['FFullBackgroundPosition'];
$ffullc	=$row['FFullColor'];
$ffullls	=$row['FFullLetterSpacing'];
$ffulllh	=$row['FFullLineHeight'];
$ffullta	=$row['FFullTextAlign'];
$ffulltd	=$row['FFullTextDecoration'];
$ffullti	=$row['FFullTextIndent'];
$ffulltt	=$row['FFullTextTransform'];
$ffullva	=$row['FFullVerticalAlign'];
$ffullwhs	=$row['FFullWhiteSpace'];
$ffullwos	=$row['FFullWordSpacing'];
$ffullff	=$row['FFullFontFamily'];
$ffullfsize	=$row['FFullFontSize'];
$ffullfstyle	=$row['FFullFontStyle'];
$ffullfv	=$row['FFullFontVariant'];
$ffullfw	=$row['FFullFontWeight'];
$ffullalc	=$row['FFullaLinkColor'];
$ffullaltd	=$row['FFullaLinkTextDecoration'];
$ffullavc	=$row['FFullaVisitedColor'];
$ffullavtd	=$row['FFullaVisitedDecoration'];
$ffullahc	=$row['FFullaHoverColor'];
$ffullahtd	=$row['FFullaHoverTextDecoration'];
$ffullaac	=$row['FFullaActiveColor'];
$ffullaatd	=$row['FFullaActiveTextDecoration'];
$ffulllsi	=$row['FFullListStyleImage'];
$ffulllsp	=$row['FFullListStylePosition'];
$ffulllst	=$row['FFullListStyleType'];
$ffullbtt	=$row['FFullBorderTopThickness'];
$ffullbts	=$row['FFullBorderTopStyle'];
$ffullbtc	=$row['FFullBorderTopColor'];
$ffullbrt	=$row['FFullBorderRightThickness'];
$ffullbrs	=$row['FFullBorderRightStyle'];
$ffullbrc	=$row['FFullBorderRightColor'];
$ffullbbt	=$row['FFullBorderBottomThickness'];
$ffullbbs	=$row['FFullBorderBottomStyle'];
$ffullbbc	=$row['FFullBorderBottomColor'];
$ffullblt	=$row['FFullBorderLeftThickness'];
$ffullbls	=$row['FFullBorderLeftStyle'];
$ffullblc	=$row['FFullBorderLeftColor'];
$ffullout	=$row['FFullOutline'];
$ffullmarg	=$row['FFullMargin'];
$ffullpad	=$row['FFullPadding'];
$ffullh	=$row['FFullHeight'];
$ffullmaxh	=$row['FFullMaxHeight'];
$ffullmaxw	=$row['FFullMaxWidth'];
$ffullminh	=$row['FFullMinHeight'];
$ffullminw	=$row['FFullMinWidth'];
$ffullw	=$row['FFullWidth'];
$ffullvis	=$row['FFullVisibility'];
$ffulldisp	=$row['FFullDisplay'];
$ffullpos	=$row['FFullPosition'];
$ffullleft	=$row['FFullLeft'];
$ffulltop	=$row['FFullTop'];
$ffullright	=$row['FFullRight'];
$ffullbot	=$row['FFullBottom'];
$ffullzind	=$row['FFullZIndex'];
$ffullfloat	=$row['FFullFloat'];
$ffullclr	=$row['FFullClear'];

$fflbgc	=$row['FFloatBackgroundColor'];
$fflbgr	=$row['FFloatBackgroundRepeat'];
$fflbga	=$row['FFloatBackgroundAttachment'];
$fflbgp	=$row['FFloatBackgroundPosition'];
$fflc	=$row['FFloatColor'];
$fflls	=$row['FFloatLetterSpacing'];
$ffllh	=$row['FFloatLineHeight'];
$fflta	=$row['FFloatTextAlign'];
$ffltd	=$row['FFloatTextDecoration'];
$fflti	=$row['FFloatTextIndent'];
$ffltt	=$row['FFloatTextTransform'];
$fflva	=$row['FFloatVerticalAlign'];
$fflwhs	=$row['FFloatWhiteSpace'];
$fflwos	=$row['FFloatWordSpacing'];
$fflff	=$row['FFloatFontFamily'];
$fflfsize	=$row['FFloatFontSize'];
$fflfstyle	=$row['FFloatFontStyle'];
$fflfv	=$row['FFloatFontVariant'];
$fflfw	=$row['FFloatFontWeight'];
$fflalc	=$row['FFloataLinkColor'];
$fflaltd	=$row['FFloataLinkTextDecoration'];
$fflavc	=$row['FFloataVisitedColor'];
$fflavtd	=$row['FFloataVisitedDecoration'];
$fflahc	=$row['FFloataHoverColor'];
$fflahtd	=$row['FFloataHoverTextDecoration'];
$fflaac	=$row['FFloataActiveColor'];
$fflaatd	=$row['FFloataActiveTextDecoration'];
$ffllsi	=$row['FFloatListStyleImage'];
$ffllsp	=$row['FFloatListStylePosition'];
$ffllst	=$row['FFloatListStyleType'];
$fflbtt	=$row['FFloatBorderTopThickness'];
$fflbts	=$row['FFloatBorderTopStyle'];
$fflbtc	=$row['FFloatBorderTopColor'];
$fflbrt	=$row['FFloatBorderRightThickness'];
$fflbrs	=$row['FFloatBorderRightStyle'];
$fflbrc	=$row['FFloatBorderRightColor'];
$fflbbt	=$row['FFloatBorderBottomThickness'];
$fflbbs	=$row['FFloatBorderBottomStyle'];
$fflbbc	=$row['FFloatBorderBottomColor'];
$fflblt	=$row['FFloatBorderLeftThickness'];
$fflbls	=$row['FFloatBorderLeftStyle'];
$fflblc	=$row['FFloatBorderLeftColor'];
$fflout	=$row['FFloatOutline'];
$fflmarg	=$row['FFloatMargin'];
$fflpad	=$row['FFloatPadding'];
$fflh	=$row['FFloatHeight'];
$fflmaxh	=$row['FFloatMaxHeight'];
$fflmaxw	=$row['FFloatMaxWidth'];
$fflminh	=$row['FFloatMinHeight'];
$fflminw	=$row['FFloatMinWidth'];
$fflw	=$row['FFloatWidth'];
$fflvis	=$row['FFloatVisibility'];
$ffldisp	=$row['FFloatDisplay'];
$fflpos	=$row['FFloatPosition'];
$fflleft	=$row['FFloatLeft'];
$ffltop	=$row['FFloatTop'];
$fflright	=$row['FFloatRight'];
$fflbot	=$row['FFloatBottom'];
$fflzind	=$row['FFloatZIndex'];
$fflfloat	=$row['FFloatFloat'];
$fflclr	=$row['FFloatClear'];

$lbgc	=$row['LinksBackgroundColor'];
$lbgr	=$row['LinksBackgroundRepeat'];
$lbga	=$row['LinksBackgroundAttachment'];
$lbgp	=$row['LinksBackgroundPosition'];
$lc	=$row['LinksColor'];
$lls	=$row['LinksLetterSpacing'];
$llh	=$row['LinksLineHeight'];
$lta	=$row['LinksTextAlign'];
$ltd	=$row['LinksTextDecoration'];
$lti	=$row['LinksTextIndent'];
$ltt	=$row['LinksTextTransform'];
$lva	=$row['LinksVerticalAlign'];
$lwhs	=$row['LinksWhiteSpace'];
$lwos	=$row['LinksWordSpacing'];
$lff	=$row['LinksFontFamily'];
$lfsize	=$row['LinksFontSize'];
$lfstyle	=$row['LinksFontStyle'];
$lfv	=$row['LinksFontVariant'];
$lfw	=$row['LinksFontWeight'];
$lalc	=$row['LinksaLinkColor'];
$laltd	=$row['LinksaLinkTextDecoration'];
$lavc	=$row['LinksaVisitedColor'];
$lavtd	=$row['LinksaVisitedDecoration'];
$lahc	=$row['LinksaHoverColor'];
$lahtd	=$row['LinksaHoverTextDecoration'];
$laac	=$row['LinksaActiveColor'];
$laatd	=$row['LinksaActiveTextDecoration'];
$llsi	=$row['LinksListStyleImage'];
$llsp	=$row['LinksListStylePosition'];
$llst	=$row['LinksListStyleType'];
$lbtt	=$row['LinksBorderTopThickness'];
$lbts	=$row['LinksBorderTopStyle'];
$lbtc	=$row['LinksBorderTopColor'];
$lbrt	=$row['LinksBorderRightThickness'];
$lbrs	=$row['LinksBorderRightStyle'];
$lbrc	=$row['LinksBorderRightColor'];
$lbbt	=$row['LinksBorderBottomThickness'];
$lbbs	=$row['LinksBorderBottomStyle'];
$lbbc	=$row['LinksBorderBottomColor'];
$lblt	=$row['LinksBorderLeftThickness'];
$lbls	=$row['LinksBorderLeftStyle'];
$lblc	=$row['LinksBorderLeftColor'];
$lout	=$row['LinksOutline'];
$lmarg	=$row['LinksMargin'];
$lpad	=$row['LinksPadding'];
$lh	=$row['LinksHeight'];
$lmaxh	=$row['LinksMaxHeight'];
$lmaxw	=$row['LinksMaxWidth'];
$lminh	=$row['LinksMinHeight'];
$lminw	=$row['LinksMinWidth'];
$lw	=$row['LinksWidth'];
$lvis	=$row['LinksVisibility'];
$ldisp	=$row['LinksDisplay'];
$lpos	=$row['LinksPosition'];
$lleft	=$row['LinksLeft'];
$ltop	=$row['LinksTop'];
$lright	=$row['LinksRight'];
$lbot	=$row['LinksBottom'];
$lzind	=$row['LinksZIndex'];
$lfloat	=$row['LinksFloat'];
$lclr	=$row['LinksClear'];

?>

/***********************/

html, body {
margin:<?=$bmartop;?> <?=$bmarrt;?> <?=$bmarbot;?> <?=$bmarlt;?>;
color:<?=$bcolor;?>; /*text color*/
/*BACKGROUND START*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$bbgc;?> url('images/backb.jpg') <?=$bbgr;?> <?=$bbga;?> <?=$bbgp;?>;
/*BACKGROUND END*/
height:<?=$bh;?>;
display:<?=$bdisp;?>;
}

#full {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$fullbgc;?> url('images/backfull.jpg') <?=$fullbgr;?> <?=$fullbga;?> <?=$fullbgp;?>;
/*--Text--*/
color:<?=$fullc;?>;
letter-spacing:<?=$fullls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$fulllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$fullta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$fulltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$fullti;?>; /*options: length, %, inherit*/
text-transform:<?=$fulltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$fullva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$fullwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$fullwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$fullff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$fullfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$fullfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$fullfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$fullfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$fulllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$fulllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$fulllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$fullbtt;?> <?=$fullbts;?> <?=$fullbtc;?>; 
border-right: <?=$fullbrt;?> <?=$fullbrs;?> <?=$fullbrc;?>;
border-bottom: <?=$fullbbt;?> <?=$fullbbs;?> <?=$fullbbc;?>;
border-left: <?=$fullblt;?> <?=$fullbls;?> <?=$fullblc;?>;
/*--Outline--*/
outline:<?=$fullout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$fullmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$fullpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$fullh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$fullmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$fullmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$fullminh;?>; /*options: length,%,inherit*/
min-width:<?=$fullminw;?>; /*options: length,%,inherit*/
width:<?=$fullw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$fullvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$fulldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$fullpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$fullleft;?>;
top:<?=$fulltop;?>;
right:<?=$fullright;?>;
bottom:<?=$fullbot;?>;
z-index:<?=$fullzind;?>;
/*--Floating--*/
float:<?=$fullfloat;?>; /*options:left,right*/
clear:<?=$fullclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#full a:link {color:<?=$fullalc;?>; text-decoration:<?=$fullaltd;?>;}      /* unvisited link */
#full a:visited {color:<?=$fullavc;?>; text-decoration:<?=$fullavtd;?>;}  /* visited link */
#full a:hover {color:<?=$fullahc;?>; text-decoration:<?=$fullahtd;?>;}  /* mouse over link */
#full a:active {color:<?=$fullaac;?>; text-decoration:<?=$fullaatd;?>;}  /* selected link */


#header_full {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$hfullbgc;?> url('images/backhfull.jpg') <?=$hfullbgr;?> <?=$hfullbga;?> <?=$hfullbgp;?>;
/*--Text--*/
color:<?=$hfullc;?>;
letter-spacing:<?=$hfullls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$hfulllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$hfullta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$hfulltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$hfullti;?>; /*options: length, %, inherit*/
text-transform:<?=$hfulltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$hfullva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$hfullwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$hfullwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$hfullff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$hfullfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$hfullfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$hfullfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$hfullfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$hfulllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$hfulllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$hfulllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$hfullbtt;?> <?=$hfullbts;?> <?=$hfullbtc;?>; 
border-right: <?=$hfullbrt;?> <?=$hfullbrs;?> <?=$hfullbrc;?>;
border-bottom: <?=$hfullbbt;?> <?=$hfullbbs;?> <?=$hfullbbc;?>;
border-left: <?=$hfullblt;?> <?=$hfullbls;?> <?=$hfullblc;?>;
/*--Outline--*/
outline:<?=$hfullout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$hfullmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$hfullpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$hfullh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$hfullmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$hfullmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$hfullminh;?>; /*options: length,%,inherit*/
min-width:<?=$hfullminw;?>; /*options: length,%,inherit*/
width:<?=$hfullw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$hfullvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$hfulldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$hfullpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$hfullleft;?>;
top:<?=$hfulltop;?>;
right:<?=$hfullright;?>;
bottom:<?=$hfullbot;?>;
z-index:<?=$hfullzind;?>;
/*--Floating--*/
float:<?=$hfullfloat;?>; /*options:left,right*/
clear:<?=$hfullclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#header_full a:link {color:<?=$hfullalc;?>; text-decoration:<?=$hfullaltd;?>;}      /* unvisited link */
#header_full a:visited {color:<?=$hfullavc;?>; text-decoration:<?=$hfullavtd;?>;}  /* visited link */
#header_full a:hover {color:<?=$hfullahc;?>; text-decoration:<?=$hfullahtd;?>;}  /* mouse over link */
#header_full a:active {color:<?=$hfullaac;?>; text-decoration:<?=$hfullaatd;?>;}  /* selected link */


#header_float {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$hflbgc;?> url('images/backhfl.jpg') <?=$hflbgr;?> <?=$hflbga;?> <?=$hflbgp;?>;
/*--Text--*/
color:<?=$hflc;?>;
letter-spacing:<?=$hflls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$hfllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$hflta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$hfltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$hflti;?>; /*options: length, %, inherit*/
text-transform:<?=$hfltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$hflva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$hflwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$hflwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$hflff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$hflfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$hflfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$hflfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$hflfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$hfllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$hfllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$hfllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$hflbtt;?> <?=$hflbts;?> <?=$hflbtc;?>; 
border-right: <?=$hflbrt;?> <?=$hflbrs;?> <?=$hflbrc;?>;
border-bottom: <?=$hflbbt;?> <?=$hflbbs;?> <?=$hflbbc;?>;
border-left: <?=$hflblt;?> <?=$hflbls;?> <?=$hflblc;?>;
/*--Outline--*/
outline:<?=$hflout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$hflmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$hflpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$hflh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$hflmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$hflmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$hflminh;?>; /*options: length,%,inherit*/
min-width:<?=$hflminw;?>; /*options: length,%,inherit*/
width:<?=$hflw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$hflvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$hfldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$hflpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$hflleft;?>;
top:<?=$hfltop;?>;
right:<?=$hflright;?>;
bottom:<?=$hflbot;?>;
z-index:<?=$hflzind;?>;
/*--Floating--*/
float:<?=$hflfloat;?>; /*options:left,right*/
clear:<?=$hflclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#header_float a:link {color:<?=$hflalc;?>; text-decoration:<?=$hflaltd;?>;}      /* unvisited link */
#header_float a:visited {color:<?=$hflavc;?>; text-decoration:<?=$hflavtd;?>;}  /* visited link */
#header_float a:hover {color:<?=$hflahc;?>; text-decoration:<?=$hflahtd;?>;}  /* mouse over link */
#header_float a:active {color:<?=$hflaac;?>; text-decoration:<?=$hflaatd;?>;}  /* selected link */


#body_full {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$bfullbgc;?> url('images/backbfull.jpg') <?=$bfullbgr;?> <?=$bfullbga;?> <?=$bfullbgp;?>;
/*--Text--*/
color:<?=$bfullc;?>;
letter-spacing:<?=$bfullls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$bfulllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$bfullta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$bfulltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$bfullti;?>; /*options: length, %, inherit*/
text-transform:<?=$bfulltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$bfullva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$bfullwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$bfullwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$bfullff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$bfullfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$bfullfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$bfullfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$bfullfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$bfulllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$bfulllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$bfulllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$bfullbtt;?> <?=$bfullbts;?> <?=$bfullbtc;?>; 
border-right: <?=$bfullbrt;?> <?=$bfullbrs;?> <?=$bfullbrc;?>;
border-bottom: <?=$bfullbbt;?> <?=$bfullbbs;?> <?=$bfullbbc;?>;
border-left: <?=$bfullblt;?> <?=$bfullbls;?> <?=$bfullblc;?>;
/*--Outline--*/
outline:<?=$bfullout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$bfullmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$bfullpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$bfullh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$bfullmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$bfullmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$bfullminh;?>; /*options: length,%,inherit*/
min-width:<?=$bfullminw;?>; /*options: length,%,inherit*/
width:<?=$bfullw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$bfullvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$bfulldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$bfullpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$bfullleft;?>;
top:<?=$bfulltop;?>;
right:<?=$bfullright;?>;
bottom:<?=$bfullbot;?>;
z-index:<?=$bfullzind;?>;
/*--Floating--*/
float:<?=$bfullfloat;?>; /*options:left,right*/
clear:<?=$bfullclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#body_full a:link {color:<?=$bfullalc;?>; text-decoration:<?=$bfullaltd;?>;}      /* unvisited link */
#body_full a:visited {color:<?=$bfullavc;?>; text-decoration:<?=$bfullavtd;?>;}  /* visited link */
#body_full a:hover {color:<?=$bfullahc;?>; text-decoration:<?=$bfullahtd;?>;}  /* mouse over link */
#body_full a:active {color:<?=$bfullaac;?>; text-decoration:<?=$bfullaatd;?>;}  /* selected link */


#body_float {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$bflbgc;?> url('images/backbfl.jpg') <?=$bflbgr;?> <?=$bflbga;?> <?=$bflbgp;?>;
/*--Text--*/
color:<?=$bflc;?>;
letter-spacing:<?=$bflls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$bfllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$bflta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$bfltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$bflti;?>; /*options: length, %, inherit*/
text-transform:<?=$bfltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$bflva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$bflwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$bflwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$bflff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$bflfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$bflfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$bflfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$bflfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$bfllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$bfllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$bfllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$bflbtt;?> <?=$bflbts;?> <?=$bflbtc;?>; 
border-right: <?=$bflbrt;?> <?=$bflbrs;?> <?=$bflbrc;?>;
border-bottom: <?=$bflbbt;?> <?=$bflbbs;?> <?=$bflbbc;?>;
border-left: <?=$bflblt;?> <?=$bflbls;?> <?=$bflblc;?>;
/*--Outline--*/
outline:<?=$bflout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$bflmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$bflpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$bflh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$bflmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$bflmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$bflminh;?>; /*options: length,%,inherit*/
min-width:<?=$bflminw;?>; /*options: length,%,inherit*/
width:<?=$bflw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$bflvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$bfldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$bflpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$bflleft;?>;
top:<?=$bfltop;?>;
right:<?=$bflright;?>;
bottom:<?=$bflbot;?>;
z-index:<?=$bflzind;?>;
/*--Floating--*/
float:<?=$bflfloat;?>; /*options:left,right*/
clear:<?=$bflclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#body_float a:link {color:<?=$bflalc;?>; text-decoration:<?=$bflaltd;?>;}      /* unvisited link */
#body_float a:visited {color:<?=$bflavc;?>; text-decoration:<?=$bflavtd;?>;}  /* visited link */
#body_float a:hover {color:<?=$bflahc;?>; text-decoration:<?=$bflahtd;?>;}  /* mouse over link */
#body_float a:active {color:<?=$bflaac;?>; text-decoration:<?=$bflaatd;?>;}  /* selected link */


#navbar {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$nbgc;?> url('images/backn.jpg') <?=$nbgr;?> <?=$nbga;?> <?=$nbgp;?>;
/*--Text--*/
color:<?=$nc;?>;
letter-spacing:<?=$nls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$nlh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$nta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$ntd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$nti;?>; /*options: length, %, inherit*/
text-transform:<?=$ntt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$nva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$nwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$nwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$nff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$nfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$nfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$nfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$nfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$nlsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$nlsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$nlst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$nbtt;?> <?=$nbts;?> <?=$nbtc;?>; 
border-right: <?=$nbrt;?> <?=$nbrs;?> <?=$nbrc;?>;
border-bottom: <?=$nbbt;?> <?=$nbbs;?> <?=$nbbc;?>;
border-left: <?=$nblt;?> <?=$nbls;?> <?=$nblc;?>;
/*--Outline--*/
outline:<?=$nout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$nmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$npad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$nh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$nmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$nmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$nminh;?>; /*options: length,%,inherit*/
min-width:<?=$nminw;?>; /*options: length,%,inherit*/
width:<?=$nw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$nvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$ndisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$npos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$nleft;?>;
top:<?=$ntop;?>;
right:<?=$nright;?>;
bottom:<?=$nbot;?>;
z-index:<?=$nzind;?>;
/*--Floating--*/
float:<?=$nfloat;?>; /*options:left,right*/
clear:<?=$nclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#navbar a:link {color:<?=$nalc;?>; text-decoration:<?=$naltd;?>;}      /* unvisited link */
#navbar a:visited {color:<?=$navc;?>; text-decoration:<?=$navtd;?>;}  /* visited link */
#navbar a:hover {color:<?=$nahc;?>; text-decoration:<?=$nahtd;?>;}  /* mouse over link */
#navbar a:active {color:<?=$naac;?>; text-decoration:<?=$naatd;?>;}  /* selected link */

#page {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$pbgc;?> url('images/backp.jpg') <?=$pbgr;?> <?=$pbga;?> <?=$pbgp;?>;
/*--Text--*/
color:<?=$pc;?>;
letter-spacing:<?=$pls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$plh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$pta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$ptd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$pti;?>; /*options: length, %, inherit*/
text-transform:<?=$ptt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$pva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$pwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$pwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$pff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$pfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$pfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$pfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$pfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$plsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$plsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$plst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$pbtt;?> <?=$pbts;?> <?=$pbtc;?>; 
border-right: <?=$pbrt;?> <?=$pbrs;?> <?=$pbrc;?>;
border-bottom: <?=$pbbt;?> <?=$pbbs;?> <?=$pbbc;?>;
border-left: <?=$pblt;?> <?=$pbls;?> <?=$pblc;?>;
/*--Outline--*/
outline:<?=$pout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$pmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$ppad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$ph;?>; /*options: auto,length,%,inherit*/
max-height:<?=$pmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$pmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$pminh;?>; /*options: length,%,inherit*/
min-width:<?=$pminw;?>; /*options: length,%,inherit*/
width:<?=$pw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$pvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$pdisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$ppos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$pleft;?>;
top:<?=$ptop;?>;
right:<?=$pright;?>;
bottom:<?=$pbot;?>;
z-index:<?=$pzind;?>;
/*--Floating--*/
float:<?=$pfloat;?>; /*options:left,right*/
clear:<?=$pclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#page a:link {color:<?=$palc;?>; text-decoration:<?=$paltd;?>;}      /* unvisited link */
#page a:visited {color:<?=$pavc;?>; text-decoration:<?=$pavtd;?>;}  /* visited link */
#page a:hover {color:<?=$pahc;?>; text-decoration:<?=$pahtd;?>;}  /* mouse over link */
#page a:active {color:<?=$paac;?>; text-decoration:<?=$paatd;?>;}  /* selected link */

#navbar_right {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$nrbgc;?> url('images/backn.jpg') <?=$nrbgr;?> <?=$nrbga;?> <?=$nrbgp;?>;
/*--Text--*/
color:<?=$nrc;?>;
letter-spacing:<?=$nrls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$nrlh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$nrta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$nrtd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$nrti;?>; /*options: length, %, inherit*/
text-transform:<?=$nrtt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$nrva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$nrwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$nrwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$nrff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$nrfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$nrfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$nrfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$nrfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$nrlsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$nrlsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$nrlst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$nrbtt;?> <?=$nrbts;?> <?=$nrbtc;?>; 
border-right: <?=$nrbrt;?> <?=$nrbrs;?> <?=$nrbrc;?>;
border-bottom: <?=$nrbbt;?> <?=$nrbbs;?> <?=$nrbbc;?>;
border-left: <?=$nrblt;?> <?=$nrbls;?> <?=$nrblc;?>;
/*--Outline--*/
outline:<?=$nrout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$nrmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$nrpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$nrh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$nrmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$nrmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$nrminh;?>; /*options: length,%,inherit*/
min-width:<?=$nrminw;?>; /*options: length,%,inherit*/
width:<?=$nrw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$nrvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$nrdisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$nrpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$nrleft;?>;
top:<?=$nrtop;?>;
right:<?=$nrright;?>;
bottom:<?=$nrbot;?>;
z-index:<?=$nrzind;?>;
/*--Floating--*/
float:<?=$nrfloat;?>; /*options:left,right*/
clear:<?=$nrclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#navbar_right a:link {color:<?=$nralc;?>; text-decoration:<?=$nraltd;?>;}      /* unvisited link */
#navbar_right a:visited {color:<?=$nravc;?>; text-decoration:<?=$nravtd;?>;}  /* visited link */
#navbar_right a:hover {color:<?=$nrahc;?>; text-decoration:<?=$nrahtd;?>;}  /* mouse over link */
#navbar_right a:active {color:<?=$nraac;?>; text-decoration:<?=$nraatd;?>;}  /* selected link */

#footer_full {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$ffullbgc;?> url('images/backffull.jpg') <?=$ffullbgr;?> <?=$ffullbga;?> <?=$ffullbgp;?>;
/*--Text--*/
color:<?=$ffullc;?>;
letter-spacing:<?=$ffullls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$ffulllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$ffullta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$ffulltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$ffullti;?>; /*options: length, %, inherit*/
text-transform:<?=$ffulltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$ffullva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$ffullwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$ffullwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$ffullff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$ffullfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$ffullfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$ffullfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$ffullfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$ffulllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$ffulllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$ffulllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$ffullbtt;?> <?=$ffullbts;?> <?=$ffullbtc;?>; 
border-right: <?=$ffullbrt;?> <?=$ffullbrs;?> <?=$ffullbrc;?>;
border-bottom: <?=$ffullbbt;?> <?=$ffullbbs;?> <?=$ffullbbc;?>;
border-left: <?=$ffullblt;?> <?=$ffullbls;?> <?=$ffullblc;?>;
/*--Outline--*/
outline:<?=$ffullout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$ffullmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$ffullpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$ffullh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$ffullmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$ffullmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$ffullminh;?>; /*options: length,%,inherit*/
min-width:<?=$ffullminw;?>; /*options: length,%,inherit*/
width:<?=$ffullw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$ffullvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$ffulldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$ffullpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$ffullleft;?>;
top:<?=$ffulltop;?>;
right:<?=$ffullright;?>;
bottom:<?=$ffullbot;?>;
z-index:<?=$ffullzind;?>;
/*--Floating--*/
float:<?=$ffullfloat;?>; /*options:left,right*/
clear:<?=$ffullclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#footer_full a:link {color:<?=$ffullalc;?>; text-decoration:<?=$ffullaltd;?>;}      /* unvisited link */
#footer_full a:visited {color:<?=$ffullavc;?>; text-decoration:<?=$ffullavtd;?>;}  /* visited link */
#footer_full a:hover {color:<?=$ffullahc;?>; text-decoration:<?=$ffullahtd;?>;}  /* mouse over link */
#footer_full a:active {color:<?=$ffullaac;?>; text-decoration:<?=$ffullaatd;?>;}  /* selected link */

#footer_float {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$fflbgc;?> url('images/backffl.jpg') <?=$fflbgr;?> <?=$fflbga;?> <?=$fflbgp;?>;
/*--Text--*/
color:<?=$fflc;?>;
letter-spacing:<?=$fflls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$ffllh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$fflta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$ffltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$fflti;?>; /*options: length, %, inherit*/
text-transform:<?=$ffltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$fflva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$fflwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$fflwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$fflff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$fflfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$fflfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$fflfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$fflfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$ffllsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$ffllsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$ffllst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$fflbtt;?> <?=$fflbts;?> <?=$fflbtc;?>; 
border-right: <?=$fflbrt;?> <?=$fflbrs;?> <?=$fflbrc;?>;
border-bottom: <?=$fflbbt;?> <?=$fflbbs;?> <?=$fflbbc;?>;
border-left: <?=$fflblt;?> <?=$fflbls;?> <?=$fflblc;?>;
/*--Outline--*/
outline:<?=$fflout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$fflmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$fflpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$fflh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$fflmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$fflmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$fflminh;?>; /*options: length,%,inherit*/
min-width:<?=$fflminw;?>; /*options: length,%,inherit*/
width:<?=$fflw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$fflvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$ffldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$fflpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$fflleft;?>;
top:<?=$ffltop;?>;
right:<?=$fflright;?>;
bottom:<?=$fflbot;?>;
z-index:<?=$fflzind;?>;
/*--Floating--*/
float:<?=$fflfloat;?>; /*options:left,right*/
clear:<?=$fflclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#footer_float a:link {color:<?=$fflalc;?>; text-decoration:<?=$fflaltd;?>;}      /* unvisited link */
#footer_float a:visited {color:<?=$fflavc;?>; text-decoration:<?=$fflavtd;?>;}  /* visited link */
#footer_float a:hover {color:<?=$fflahc;?>; text-decoration:<?=$fflahtd;?>;}  /* mouse over link */
#footer_float a:active {color:<?=$fflaac;?>; text-decoration:<?=$fflaatd;?>;}  /* selected link */

#linksmenu {
/*************Styling**************/
/*--Background--*/
/*background shorthand: color image repeat attachment position*/
/*background repeat options: no-repeat, repeat, repeat-x, repeat-y*/
/*background attachment options: scroll(default), fixed, inherit*/
background:<?=$lbgc;?> url('images/backl.jpg') <?=$lbgr;?> <?=$lbga;?> <?=$lbgp;?>;
/*--Text--*/
color:<?=$lc;?>;
letter-spacing:<?=$lls;?>; /*options: normal, length (including negatives), inherit*/
line-height:<?=$llh;?>; /*options: normal, number, length, %, inherit*/
text-align:<?=$lta;?>; /*options: left, right, center, justify, inherit*/
text-decoration:<?=$ltd;?>; /*options: none, underline, overline, line-through, blink, inherit*/
text-indent:<?=$lti;?>; /*options: length, %, inherit*/
text-transform:<?=$ltt;?>; /*options: none, capitalize, uppercase, lowercase, inherit*/
vertical-align:<?=$lva;?>; /*options: length, %, baseline, sub, super, top, text-top, middle, bottom, text-bottom, inherit*/
white-space:<?=$lwhs;?>; /*options: normal, nowrap, pre, pre-line, pre-wrap, inherit*/
word-spacing:<?=$lwos;?>; /*options: normal, length, inherit*/
/*--Fonts--*/
font-family:<?=$lff;?>; /*serif options: serif,"Times New Roman",Times,Georgia, "Palatino Linotype","Book Antiqua"; Sans-Serif options: sans-serif,Arial,Helvetica,Gadget,"Comic Sans MS",cursive,Tahoma,Geneva,Verdana; monospace options: monospace,"Courier new","Lucida Console"*/
font-size:<?=$lfsize;?>; /*options:xx-small,x-small,small,medium,large,x-large,xx-large,smaller,larger,length,%,inherit*/
font-style:<?=$lfstyle;?>; /*options:normal,italic,oblique,inherit*/
font-variant:<?=$lfv;?>; /*options:normal,small-caps,inherit*/
font-weight:<?=$lfw;?>; /*options:normal,bold,bolder,lighter*/
/*--Lists--*/
list-style-image:url('<?=$llsi;?>'); /*format: url('image.gif') */
list-style-position:<?=$llsp;?>; /*options: inside,outside,inherit*/
list-style-type:<?=$llst;?>; /*common: decimal,lower-alpha,lower-roman,none,upper-alpha,upper-latin,upper-roman*/
/*--Tables--*/

/*****************Box Model***************/
/*--Border--*/
/*border style options: dotted, dashed, solid, double, groove, ridge, inset, outset*/
border-top: <?=$lbtt;?> <?=$lbts;?> <?=$lbtc;?>; 
border-right: <?=$lbrt;?> <?=$lbrs;?> <?=$lbrc;?>;
border-bottom: <?=$lbbt;?> <?=$lbbs;?> <?=$lbbc;?>;
border-left: <?=$lblt;?> <?=$lbls;?> <?=$lblc;?>;
/*--Outline--*/
outline:<?=$lout;?>; /*order: color style width */
/*--Margin--*/
margin:<?=$lmarg;?>; /*options: auto,length,%; order: top,right,bottom,left*/
/*--Padding--*/
padding:<?=$lpad;?>; /*options: length,%; order: top,right,bottom,left*/

/*****************Advanced***************/
/*--Dimension--*/
height:<?=$lh;?>; /*options: auto,length,%,inherit*/
max-height:<?=$lmaxh;?>; /*options: none,length,%,inherit*/
max-width:<?=$lmaxw;?>; /*options: none,length,%,inherit*/
min-height:<?=$lminh;?>; /*options: length,%,inherit*/
min-width:<?=$lminw;?>; /*options: length,%,inherit*/
width:<?=$lw;?>; /*options: auto,length,%,inherit*/
/*--Display--*/
visibility:<?=$lvis;?>; /*options: visible,hidden,collapse,inherit*/
display:<?=$ldisp;?>; /*common: none,block,inline,inline-block,inline-table,list-item,table,inherit*/
/*--Positioning--*/
position:<?=$lpos;?>; /*options: static,fixed,relative,absolute*/
left:<?=$lleft;?>;
top:<?=$ltop;?>;
right:<?=$lright;?>;
bottom:<?=$lbot;?>;
z-index:<?=$lzind;?>;
/*--Floating--*/
float:<?=$lfloat;?>; /*options:left,right*/
clear:<?=$lclr;?>; /*options:left,right,both*/
}
/*--Links--*/
#linksmenu a:link {color:<?=$lalc;?>; text-decoration:<?=$laltd;?>;}      /* unvisited link */
#linksmenu a:visited {color:<?=$lavc;?>; text-decoration:<?=$lavtd;?>;}  /* visited link */
#linksmenu a:hover {color:<?=$lahc;?>; text-decoration:<?=$lahtd;?>;}  /* mouse over link */
#linksmenu a:active {color:<?=$laac;?>; text-decoration:<?=$laatd;?>;}  /* selected link */


.spacer {
clear:both;
}
