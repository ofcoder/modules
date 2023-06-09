
#### Пример файла с компонентом внутри

    <?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle('Каталог');
    ?>
    
    <?$APPLICATION->IncludeComponent(
        "ofcoder:catalog",
        "list"
    );?>
    
    
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>