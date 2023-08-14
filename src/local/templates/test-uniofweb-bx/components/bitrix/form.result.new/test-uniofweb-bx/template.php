<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?= $arResult["FORM_HEADER"]; ?>

<?php if ($arResult["isFormNote"] === "Y"): ?>
    <div class="header-popup__status">
        Ваша заявка успешно отправлена!
    </div>
<?php endif; ?>

<?php foreach ($arResult["QUESTIONS"] as $question_key => $question): ?>
    <?php if ($question['STRUCTURE'][0]['FIELD_TYPE'] === 'text'): ?>
        <input class="header-popup__field" type="text" name="form_text_<?= $question['STRUCTURE'][0]['ID']; ?>"
               placeholder="<?= $question['CAPTION']; ?>">
    <?php elseif ($question['STRUCTURE'][0]['FIELD_TYPE'] === 'dropdown'): ?>
        <select id="form_dropdown_<?= $question_key; ?>" class="hidden js-select" name="form_dropdown_<?= $question_key; ?>">
            <?php foreach ($question['STRUCTURE'] as $option): ?>
                <option value="<?= $option['ID']; ?>"<?= $option['FIELD_PARAM'] === 'selected' ? ' selected' : ''; ?>>
                    <?= $option['MESSAGE']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    <?php elseif ($question['STRUCTURE'][0]['FIELD_TYPE'] === 'textarea'): ?>
        <textarea class="header-popup__field" name="form_textarea_<?= $question['STRUCTURE'][0]['ID']; ?>"
                  placeholder="<?= $question['CAPTION']; ?>"></textarea>
    <?php elseif ($question['STRUCTURE'][0]['FIELD_TYPE'] === 'file'): ?>
        <input id="file_<?= $question['STRUCTURE'][0]['ID']; ?>" class="hidden"
               name="form_file_<?= $question['STRUCTURE'][0]['ID']; ?>" type="file">

        <label class="header-popup__field" for="file_<?= $question['STRUCTURE'][0]['ID']; ?>">
            <?= $question['CAPTION']; ?>
        </label>
    <?php endif; ?>
<?php endforeach; ?>
<button class="btn header-popup__btn" name="web_form_submit" value="Сохранить">
    <span>Отправить</span>
</button>

<?= $arResult["FORM_FOOTER"]; ?>