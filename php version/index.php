<div class="main-shotrs__row">
            <?
            $arSelect = array("ID", "NAME", "HTML_KOD", "TEST_1");
            $arFilter = array("IBLOCK_ID" => 46);
            $res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
            $res2 = (array) $res;

            foreach ($res2['arResult'] as $value) {
            ?>
                <div class="main-shotrs__block id-<?= $value['ID'] ?>">
                    <div class="main-shotrs__video">
                        <?
                        $arFilter2 = array("IBLOCK_ID" => 46, "ID" => $value['ID']);
                        $res3 = CIBlockElement::GetList(array(), $arFilter2); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
                        if ($ob = $res3->GetNextElement()) {; // переходим к след элементу, если такой есть

                            $arProps = $ob->GetProperties(); // свойства элемента
                            print_r($arProps['HTML_KOD']['~VALUE']['TEXT']);
                        }
                        ?>
                    </div>
                    <div class="main-shotrs__name">
                        <?= $value['NAME'] ?>
                    </div>
                </div>
            <? } ?>
        </div>