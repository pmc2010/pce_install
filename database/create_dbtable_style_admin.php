<?php

db_connect();

// Create table
mysql_query("CREATE TABLE style_admin
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

BodyMarginTop varchar(15),
BodyMarginRight varchar(15),
BodyMarginBottom varchar(15),
BodyMarginLeft varchar(15),
BodyColor varchar(15),
BodyBackgroundColor varchar(15),
BodyBackgroundRepeat varchar(15),
BodyBackgroundAttachment varchar(15),
BodyBackgroundPosition varchar(15),
BodyHeight varchar(15),
BodyDisplay varchar(15),

FullBackgroundColor varchar(15),
FullBackgroundRepeat varchar(15),
FullBackgroundAttachment varchar(15),
FullBackgroundPosition varchar(15),
FullColor varchar(15),
FullLetterSpacing varchar(15),
FullLineHeight varchar(15),
FullTextAlign varchar(15),
FullTextDecoration varchar(15),
FullTextIndent varchar(15),
FullTextTransform varchar(15),
FullVerticalAlign varchar(15),
FullWhiteSpace varchar(15),
FullWordSpacing varchar(15),
FullFontFamily varchar(50),
FullFontSize varchar(15),
FullFontStyle varchar(15),
FullFontVariant varchar(15),
FullFontWeight varchar(15),
FullaLinkColor varchar(15),
FullaLinkTextDecoration varchar(15),
FullaVisitedColor varchar(15),
FullaVisitedDecoration varchar(15),
FullaHoverColor varchar(15),
FullaHoverTextDecoration varchar(15),
FullaActiveColor varchar(15),
FullaActiveTextDecoration varchar(15),
FullListStyleImage varchar(100),
FullListStylePosition varchar(15),
FullListStyleType varchar(25),
FullBorderTopThickness varchar(15),
FullBorderTopStyle varchar(15),
FullBorderTopColor varchar(15),
FullBorderRightThickness varchar(15),
FullBorderRightStyle varchar(15),
FullBorderRightColor varchar(15),
FullBorderBottomThickness varchar(15),
FullBorderBottomStyle varchar(15),
FullBorderBottomColor varchar(15),
FullBorderLeftThickness varchar(15),
FullBorderLeftStyle varchar(15),
FullBorderLeftColor varchar(15),
FullOutline varchar(15),
FullMargin varchar(30),
FullPadding varchar(30),
FullHeight varchar(15),
FullMaxHeight varchar(15),
FullMaxWidth varchar(15),
FullMinHeight varchar(15),
FullMinWidth varchar(15),
FullWidth varchar(15),
FullVisibility varchar(15),
FullDisplay varchar(15),
FullPosition varchar(15),
FullLeft varchar(15),
FullTop varchar(15),
FullRight varchar(15),
FullBottom varchar(15),
FullZIndex varchar(15),
FullFloat varchar(15),
FullClear varchar(15),

HFullBackgroundColor varchar(15),
HFullBackgroundRepeat varchar(15),
HFullBackgroundAttachment varchar(15),
HFullBackgroundPosition varchar(15),
HFullColor varchar(15),
HFullLetterSpacing varchar(15),
HFullLineHeight varchar(15),
HFullTextAlign varchar(15),
HFullTextDecoration varchar(15),
HFullTextIndent varchar(15),
HFullTextTransform varchar(15),
HFullVerticalAlign varchar(15),
HFullWhiteSpace varchar(15),
HFullWordSpacing varchar(15),
HFullFontFamily varchar(50),
HFullFontSize varchar(15),
HFullFontStyle varchar(15),
HFullFontVariant varchar(15),
HFullFontWeight varchar(15),
HFullaLinkColor varchar(15),
HFullaLinkTextDecoration varchar(15),
HFullaVisitedColor varchar(15),
HFullaVisitedDecoration varchar(15),
HFullaHoverColor varchar(15),
HFullaHoverTextDecoration varchar(15),
HFullaActiveColor varchar(15),
HFullaActiveTextDecoration varchar(15),
HFullListStyleImage varchar(100),
HFullListStylePosition varchar(15),
HFullListStyleType varchar(25),
HFullBorderTopThickness varchar(15),
HFullBorderTopStyle varchar(15),
HFullBorderTopColor varchar(15),
HFullBorderRightThickness varchar(15),
HFullBorderRightStyle varchar(15),
HFullBorderRightColor varchar(15),
HFullBorderBottomThickness varchar(15),
HFullBorderBottomStyle varchar(15),
HFullBorderBottomColor varchar(15),
HFullBorderLeftThickness varchar(15),
HFullBorderLeftStyle varchar(15),
HFullBorderLeftColor varchar(15),
HFullOutline varchar(15),
HFullMargin varchar(30),
HFullPadding varchar(30),
HFullHeight varchar(15),
HFullMaxHeight varchar(15),
HFullMaxWidth varchar(15),
HFullMinHeight varchar(15),
HFullMinWidth varchar(15),
HFullWidth varchar(15),
HFullVisibility varchar(15),
HFullDisplay varchar(15),
HFullPosition varchar(15),
HFullLeft varchar(15),
HFullTop varchar(15),
HFullRight varchar(15),
HFullBottom varchar(15),
HFullZIndex varchar(15),
HFullFloat varchar(15),
HFullClear varchar(15),

HFloatBackgroundColor varchar(15),
HFloatBackgroundRepeat varchar(15),
HFloatBackgroundAttachment varchar(15),
HFloatBackgroundPosition varchar(15),
HFloatColor varchar(15),
HFloatLetterSpacing varchar(15),
HFloatLineHeight varchar(15),
HFloatTextAlign varchar(15),
HFloatTextDecoration varchar(15),
HFloatTextIndent varchar(15),
HFloatTextTransform varchar(15),
HFloatVerticalAlign varchar(15),
HFloatWhiteSpace varchar(15),
HFloatWordSpacing varchar(15),
HFloatFontFamily varchar(50),
HFloatFontSize varchar(15),
HFloatFontStyle varchar(15),
HFloatFontVariant varchar(15),
HFloatFontWeight varchar(15),
HFloataLinkColor varchar(15),
HFloataLinkTextDecoration varchar(15),
HFloataVisitedColor varchar(15),
HFloataVisitedDecoration varchar(15),
HFloataHoverColor varchar(15),
HFloataHoverTextDecoration varchar(15),
HFloataActiveColor varchar(15),
HFloataActiveTextDecoration varchar(15),
HFloatListStyleImage varchar(100),
HFloatListStylePosition varchar(15),
HFloatListStyleType varchar(25),
HFloatBorderTopThickness varchar(15),
HFloatBorderTopStyle varchar(15),
HFloatBorderTopColor varchar(15),
HFloatBorderRightThickness varchar(15),
HFloatBorderRightStyle varchar(15),
HFloatBorderRightColor varchar(15),
HFloatBorderBottomThickness varchar(15),
HFloatBorderBottomStyle varchar(15),
HFloatBorderBottomColor varchar(15),
HFloatBorderLeftThickness varchar(15),
HFloatBorderLeftStyle varchar(15),
HFloatBorderLeftColor varchar(15),
HFloatOutline varchar(15),
HFloatMargin varchar(30),
HFloatPadding varchar(30),
HFloatHeight varchar(15),
HFloatMaxHeight varchar(15),
HFloatMaxWidth varchar(15),
HFloatMinHeight varchar(15),
HFloatMinWidth varchar(15),
HFloatWidth varchar(15),
HFloatVisibility varchar(15),
HFloatDisplay varchar(15),
HFloatPosition varchar(15),
HFloatLeft varchar(15),
HFloatTop varchar(15),
HFloatRight varchar(15),
HFloatBottom varchar(15),
HFloatZIndex varchar(15),
HFloatFloat varchar(15),
HFloatClear varchar(15),

BFullBackgroundColor varchar(15),
BFullBackgroundRepeat varchar(15),
BFullBackgroundAttachment varchar(15),
BFullBackgroundPosition varchar(15),
BFullColor varchar(15),
BFullLetterSpacing varchar(15),
BFullLineHeight varchar(15),
BFullTextAlign varchar(15),
BFullTextDecoration varchar(15),
BFullTextIndent varchar(15),
BFullTextTransform varchar(15),
BFullVerticalAlign varchar(15),
BFullWhiteSpace varchar(15),
BFullWordSpacing varchar(15),
BFullFontFamily varchar(50),
BFullFontSize varchar(15),
BFullFontStyle varchar(15),
BFullFontVariant varchar(15),
BFullFontWeight varchar(15),
BFullaLinkColor varchar(15),
BFullaLinkTextDecoration varchar(15),
BFullaVisitedColor varchar(15),
BFullaVisitedDecoration varchar(15),
BFullaHoverColor varchar(15),
BFullaHoverTextDecoration varchar(15),
BFullaActiveColor varchar(15),
BFullaActiveTextDecoration varchar(15),
BFullListStyleImage varchar(100),
BFullListStylePosition varchar(15),
BFullListStyleType varchar(25),
BFullBorderTopThickness varchar(15),
BFullBorderTopStyle varchar(15),
BFullBorderTopColor varchar(15),
BFullBorderRightThickness varchar(15),
BFullBorderRightStyle varchar(15),
BFullBorderRightColor varchar(15),
BFullBorderBottomThickness varchar(15),
BFullBorderBottomStyle varchar(15),
BFullBorderBottomColor varchar(15),
BFullBorderLeftThickness varchar(15),
BFullBorderLeftStyle varchar(15),
BFullBorderLeftColor varchar(15),
BFullOutline varchar(15),
BFullMargin varchar(30),
BFullPadding varchar(30),
BFullHeight varchar(15),
BFullMaxHeight varchar(15),
BFullMaxWidth varchar(15),
BFullMinHeight varchar(15),
BFullMinWidth varchar(15),
BFullWidth varchar(15),
BFullVisibility varchar(15),
BFullDisplay varchar(15),
BFullPosition varchar(15),
BFullLeft varchar(15),
BFullTop varchar(15),
BFullRight varchar(15),
BFullBottom varchar(15),
BFullZIndex varchar(15),
BFullFloat varchar(15),
BFullClear varchar(15),

BFloatBackgroundColor varchar(15),
BFloatBackgroundRepeat varchar(15),
BFloatBackgroundAttachment varchar(15),
BFloatBackgroundPosition varchar(15),
BFloatColor varchar(15),
BFloatLetterSpacing varchar(15),
BFloatLineHeight varchar(15),
BFloatTextAlign varchar(15),
BFloatTextDecoration varchar(15),
BFloatTextIndent varchar(15),
BFloatTextTransform varchar(15),
BFloatVerticalAlign varchar(15),
BFloatWhiteSpace varchar(15),
BFloatWordSpacing varchar(15),
BFloatFontFamily varchar(50),
BFloatFontSize varchar(15),
BFloatFontStyle varchar(15),
BFloatFontVariant varchar(15),
BFloatFontWeight varchar(15),
BFloataLinkColor varchar(15),
BFloataLinkTextDecoration varchar(15),
BFloataVisitedColor varchar(15),
BFloataVisitedDecoration varchar(15),
BFloataHoverColor varchar(15),
BFloataHoverTextDecoration varchar(15),
BFloataActiveColor varchar(15),
BFloataActiveTextDecoration varchar(15),
BFloatListStyleImage varchar(100),
BFloatListStylePosition varchar(15),
BFloatListStyleType varchar(25),
BFloatBorderTopThickness varchar(15),
BFloatBorderTopStyle varchar(15),
BFloatBorderTopColor varchar(15),
BFloatBorderRightThickness varchar(15),
BFloatBorderRightStyle varchar(15),
BFloatBorderRightColor varchar(15),
BFloatBorderBottomThickness varchar(15),
BFloatBorderBottomStyle varchar(15),
BFloatBorderBottomColor varchar(15),
BFloatBorderLeftThickness varchar(15),
BFloatBorderLeftStyle varchar(15),
BFloatBorderLeftColor varchar(15),
BFloatOutline varchar(15),
BFloatMargin varchar(30),
BFloatPadding varchar(30),
BFloatHeight varchar(15),
BFloatMaxHeight varchar(15),
BFloatMaxWidth varchar(15),
BFloatMinHeight varchar(15),
BFloatMinWidth varchar(15),
BFloatWidth varchar(15),
BFloatVisibility varchar(15),
BFloatDisplay varchar(15),
BFloatPosition varchar(15),
BFloatLeft varchar(15),
BFloatTop varchar(15),
BFloatRight varchar(15),
BFloatBottom varchar(15),
BFloatZIndex varchar(15),
BFloatFloat varchar(15),
BFloatClear varchar(15),

NavbarBackgroundColor varchar(15),
NavbarBackgroundRepeat varchar(15),
NavbarBackgroundAttachment varchar(15),
NavbarBackgroundPosition varchar(15),
NavbarColor varchar(15),
NavbarLetterSpacing varchar(15),
NavbarLineHeight varchar(15),
NavbarTextAlign varchar(15),
NavbarTextDecoration varchar(15),
NavbarTextIndent varchar(15),
NavbarTextTransform varchar(15),
NavbarVerticalAlign varchar(15),
NavbarWhiteSpace varchar(15),
NavbarWordSpacing varchar(15),
NavbarFontFamily varchar(50),
NavbarFontSize varchar(15),
NavbarFontStyle varchar(15),
NavbarFontVariant varchar(15),
NavbarFontWeight varchar(15),
NavbaraLinkColor varchar(15),
NavbaraLinkTextDecoration varchar(15),
NavbaraVisitedColor varchar(15),
NavbaraVisitedDecoration varchar(15),
NavbaraHoverColor varchar(15),
NavbaraHoverTextDecoration varchar(15),
NavbaraActiveColor varchar(15),
NavbaraActiveTextDecoration varchar(15),
NavbarListStyleImage varchar(100),
NavbarListStylePosition varchar(15),
NavbarListStyleType varchar(25),
NavbarBorderTopThickness varchar(15),
NavbarBorderTopStyle varchar(15),
NavbarBorderTopColor varchar(15),
NavbarBorderRightThickness varchar(15),
NavbarBorderRightStyle varchar(15),
NavbarBorderRightColor varchar(15),
NavbarBorderBottomThickness varchar(15),
NavbarBorderBottomStyle varchar(15),
NavbarBorderBottomColor varchar(15),
NavbarBorderLeftThickness varchar(15),
NavbarBorderLeftStyle varchar(15),
NavbarBorderLeftColor varchar(15),
NavbarOutline varchar(15),
NavbarMargin varchar(30),
NavbarPadding varchar(30),
NavbarHeight varchar(15),
NavbarMaxHeight varchar(15),
NavbarMaxWidth varchar(15),
NavbarMinHeight varchar(15),
NavbarMinWidth varchar(15),
NavbarWidth varchar(15),
NavbarVisibility varchar(15),
NavbarDisplay varchar(15),
NavbarPosition varchar(15),
NavbarLeft varchar(15),
NavbarTop varchar(15),
NavbarRight varchar(15),
NavbarBottom varchar(15),
NavbarZIndex varchar(15),
NavbarFloat varchar(15),
NavbarClear varchar(15),

PageBackgroundColor varchar(15),
PageBackgroundRepeat varchar(15),
PageBackgroundAttachment varchar(15),
PageBackgroundPosition varchar(15),
PageColor varchar(15),
PageLetterSpacing varchar(15),
PageLineHeight varchar(15),
PageTextAlign varchar(15),
PageTextDecoration varchar(15),
PageTextIndent varchar(15),
PageTextTransform varchar(15),
PageVerticalAlign varchar(15),
PageWhiteSpace varchar(15),
PageWordSpacing varchar(15),
PageFontFamily varchar(50),
PageFontSize varchar(15),
PageFontStyle varchar(15),
PageFontVariant varchar(15),
PageFontWeight varchar(15),
PageaLinkColor varchar(15),
PageaLinkTextDecoration varchar(15),
PageaVisitedColor varchar(15),
PageaVisitedDecoration varchar(15),
PageaHoverColor varchar(15),
PageaHoverTextDecoration varchar(15),
PageaActiveColor varchar(15),
PageaActiveTextDecoration varchar(15),
PageListStyleImage varchar(100),
PageListStylePosition varchar(15),
PageListStyleType varchar(25),
PageBorderTopThickness varchar(15),
PageBorderTopStyle varchar(15),
PageBorderTopColor varchar(15),
PageBorderRightThickness varchar(15),
PageBorderRightStyle varchar(15),
PageBorderRightColor varchar(15),
PageBorderBottomThickness varchar(15),
PageBorderBottomStyle varchar(15),
PageBorderBottomColor varchar(15),
PageBorderLeftThickness varchar(15),
PageBorderLeftStyle varchar(15),
PageBorderLeftColor varchar(15),
PageOutline varchar(15),
PageMargin varchar(30),
PagePadding varchar(30),
PageHeight varchar(15),
PageMaxHeight varchar(15),
PageMaxWidth varchar(15),
PageMinHeight varchar(15),
PageMinWidth varchar(15),
PageWidth varchar(15),
PageVisibility varchar(15),
PageDisplay varchar(15),
PagePosition varchar(15),
PageLeft varchar(15),
PageTop varchar(15),
PageRight varchar(15),
PageBottom varchar(15),
PageZIndex varchar(15),
PageFloat varchar(15),
PageClear varchar(15),

NavbarRightBackgroundColor varchar(15),
NavbarRightBackgroundRepeat varchar(15),
NavbarRightBackgroundAttachment varchar(15),
NavbarRightBackgroundPosition varchar(15),
NavbarRightColor varchar(15),
NavbarRightLetterSpacing varchar(15),
NavbarRightLineHeight varchar(15),
NavbarRightTextAlign varchar(15),
NavbarRightTextDecoration varchar(15),
NavbarRightTextIndent varchar(15),
NavbarRightTextTransform varchar(15),
NavbarRightVerticalAlign varchar(15),
NavbarRightWhiteSpace varchar(15),
NavbarRightWordSpacing varchar(15),
NavbarRightFontFamily varchar(50),
NavbarRightFontSize varchar(15),
NavbarRightFontStyle varchar(15),
NavbarRightFontVariant varchar(15),
NavbarRightFontWeight varchar(15),
NavbarRightaLinkColor varchar(15),
NavbarRightaLinkTextDecoration varchar(15),
NavbarRightaVisitedColor varchar(15),
NavbarRightaVisitedDecoration varchar(15),
NavbarRightaHoverColor varchar(15),
NavbarRightaHoverTextDecoration varchar(15),
NavbarRightaActiveColor varchar(15),
NavbarRightaActiveTextDecoration varchar(15),
NavbarRightListStyleImage varchar(100),
NavbarRightListStylePosition varchar(15),
NavbarRightListStyleType varchar(25),
NavbarRightBorderTopThickness varchar(15),
NavbarRightBorderTopStyle varchar(15),
NavbarRightBorderTopColor varchar(15),
NavbarRightBorderRightThickness varchar(15),
NavbarRightBorderRightStyle varchar(15),
NavbarRightBorderRightColor varchar(15),
NavbarRightBorderBottomThickness varchar(15),
NavbarRightBorderBottomStyle varchar(15),
NavbarRightBorderBottomColor varchar(15),
NavbarRightBorderLeftThickness varchar(15),
NavbarRightBorderLeftStyle varchar(15),
NavbarRightBorderLeftColor varchar(15),
NavbarRightOutline varchar(15),
NavbarRightMargin varchar(30),
NavbarRightPadding varchar(30),
NavbarRightHeight varchar(15),
NavbarRightMaxHeight varchar(15),
NavbarRightMaxWidth varchar(15),
NavbarRightMinHeight varchar(15),
NavbarRightMinWidth varchar(15),
NavbarRightWidth varchar(15),
NavbarRightVisibility varchar(15),
NavbarRightDisplay varchar(15),
NavbarRightPosition varchar(15),
NavbarRightLeft varchar(15),
NavbarRightTop varchar(15),
NavbarRightRight varchar(15),
NavbarRightBottom varchar(15),
NavbarRightZIndex varchar(15),
NavbarRightFloat varchar(15),
NavbarRightClear varchar(15),

FFullBackgroundColor varchar(15),
FFullBackgroundRepeat varchar(15),
FFullBackgroundAttachment varchar(15),
FFullBackgroundPosition varchar(15),
FFullColor varchar(15),
FFullLetterSpacing varchar(15),
FFullLineHeight varchar(15),
FFullTextAlign varchar(15),
FFullTextDecoration varchar(15),
FFullTextIndent varchar(15),
FFullTextTransform varchar(15),
FFullVerticalAlign varchar(15),
FFullWhiteSpace varchar(15),
FFullWordSpacing varchar(15),
FFullFontFamily varchar(50),
FFullFontSize varchar(15),
FFullFontStyle varchar(15),
FFullFontVariant varchar(15),
FFullFontWeight varchar(15),
FFullaLinkColor varchar(15),
FFullaLinkTextDecoration varchar(15),
FFullaVisitedColor varchar(15),
FFullaVisitedDecoration varchar(15),
FFullaHoverColor varchar(15),
FFullaHoverTextDecoration varchar(15),
FFullaActiveColor varchar(15),
FFullaActiveTextDecoration varchar(15),
FFullListStyleImage varchar(100),
FFullListStylePosition varchar(15),
FFullListStyleType varchar(25),
FFullBorderTopThickness varchar(15),
FFullBorderTopStyle varchar(15),
FFullBorderTopColor varchar(15),
FFullBorderRightThickness varchar(15),
FFullBorderRightStyle varchar(15),
FFullBorderRightColor varchar(15),
FFullBorderBottomThickness varchar(15),
FFullBorderBottomStyle varchar(15),
FFullBorderBottomColor varchar(15),
FFullBorderLeftThickness varchar(15),
FFullBorderLeftStyle varchar(15),
FFullBorderLeftColor varchar(15),
FFullOutline varchar(15),
FFullMargin varchar(30),
FFullPadding varchar(30),
FFullHeight varchar(15),
FFullMaxHeight varchar(15),
FFullMaxWidth varchar(15),
FFullMinHeight varchar(15),
FFullMinWidth varchar(15),
FFullWidth varchar(15),
FFullVisibility varchar(15),
FFullDisplay varchar(15),
FFullPosition varchar(15),
FFullLeft varchar(15),
FFullTop varchar(15),
FFullRight varchar(15),
FFullBottom varchar(15),
FFullZIndex varchar(15),
FFullFloat varchar(15),
FFullClear varchar(15),

FFloatBackgroundColor varchar(15),
FFloatBackgroundRepeat varchar(15),
FFloatBackgroundAttachment varchar(15),
FFloatBackgroundPosition varchar(15),
FFloatColor varchar(15),
FFloatLetterSpacing varchar(15),
FFloatLineHeight varchar(15),
FFloatTextAlign varchar(15),
FFloatTextDecoration varchar(15),
FFloatTextIndent varchar(15),
FFloatTextTransform varchar(15),
FFloatVerticalAlign varchar(15),
FFloatWhiteSpace varchar(15),
FFloatWordSpacing varchar(15),
FFloatFontFamily varchar(50),
FFloatFontSize varchar(15),
FFloatFontStyle varchar(15),
FFloatFontVariant varchar(15),
FFloatFontWeight varchar(15),
FFloataLinkColor varchar(15),
FFloataLinkTextDecoration varchar(15),
FFloataVisitedColor varchar(15),
FFloataVisitedDecoration varchar(15),
FFloataHoverColor varchar(15),
FFloataHoverTextDecoration varchar(15),
FFloataActiveColor varchar(15),
FFloataActiveTextDecoration varchar(15),
FFloatListStyleImage varchar(100),
FFloatListStylePosition varchar(15),
FFloatListStyleType varchar(25),
FFloatBorderTopThickness varchar(15),
FFloatBorderTopStyle varchar(15),
FFloatBorderTopColor varchar(15),
FFloatBorderRightThickness varchar(15),
FFloatBorderRightStyle varchar(15),
FFloatBorderRightColor varchar(15),
FFloatBorderBottomThickness varchar(15),
FFloatBorderBottomStyle varchar(15),
FFloatBorderBottomColor varchar(15),
FFloatBorderLeftThickness varchar(15),
FFloatBorderLeftStyle varchar(15),
FFloatBorderLeftColor varchar(15),
FFloatOutline varchar(15),
FFloatMargin varchar(30),
FFloatPadding varchar(30),
FFloatHeight varchar(15),
FFloatMaxHeight varchar(15),
FFloatMaxWidth varchar(15),
FFloatMinHeight varchar(15),
FFloatMinWidth varchar(15),
FFloatWidth varchar(15),
FFloatVisibility varchar(15),
FFloatDisplay varchar(15),
FFloatPosition varchar(15),
FFloatLeft varchar(15),
FFloatTop varchar(15),
FFloatRight varchar(15),
FFloatBottom varchar(15),
FFloatZIndex varchar(15),
FFloatFloat varchar(15),
FFloatClear varchar(15),

LinksBackgroundColor varchar(15),
LinksBackgroundRepeat varchar(15),
LinksBackgroundAttachment varchar(15),
LinksBackgroundPosition varchar(15),
LinksColor varchar(15),
LinksLetterSpacing varchar(15),
LinksLineHeight varchar(15),
LinksTextAlign varchar(15),
LinksTextDecoration varchar(15),
LinksTextIndent varchar(15),
LinksTextTransform varchar(15),
LinksVerticalAlign varchar(15),
LinksWhiteSpace varchar(15),
LinksWordSpacing varchar(15),
LinksFontFamily varchar(50),
LinksFontSize varchar(15),
LinksFontStyle varchar(15),
LinksFontVariant varchar(15),
LinksFontWeight varchar(15),
LinksaLinkColor varchar(15),
LinksaLinkTextDecoration varchar(15),
LinksaVisitedColor varchar(15),
LinksaVisitedDecoration varchar(15),
LinksaHoverColor varchar(15),
LinksaHoverTextDecoration varchar(15),
LinksaActiveColor varchar(15),
LinksaActiveTextDecoration varchar(15),
LinksListStyleImage varchar(100),
LinksListStylePosition varchar(15),
LinksListStyleType varchar(25),
LinksBorderTopThickness varchar(15),
LinksBorderTopStyle varchar(15),
LinksBorderTopColor varchar(15),
LinksBorderRightThickness varchar(15),
LinksBorderRightStyle varchar(15),
LinksBorderRightColor varchar(15),
LinksBorderBottomThickness varchar(15),
LinksBorderBottomStyle varchar(15),
LinksBorderBottomColor varchar(15),
LinksBorderLeftThickness varchar(15),
LinksBorderLeftStyle varchar(15),
LinksBorderLeftColor varchar(15),
LinksOutline varchar(15),
LinksMargin varchar(30),
LinksPadding varchar(30),
LinksHeight varchar(15),
LinksMaxHeight varchar(15),
LinksMaxWidth varchar(15),
LinksMinHeight varchar(15),
LinksMinWidth varchar(15),
LinksWidth varchar(15),
LinksVisibility varchar(15),
LinksDisplay varchar(15),
LinksPosition varchar(15),
LinksLeft varchar(15),
LinksTop varchar(15),
LinksRight varchar(15),
LinksBottom varchar(15),
LinksZIndex varchar(15),
LinksFloat varchar(15),
LinksClear varchar(15)

) ");


if(tableExists("style_admin",$dbusername,$dbpassword,$dbname))
{
 echo "Created Admin Style Table!";
}
else
{
 echo "Failed to create Admin Style table!";
}

?>