<?php

/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) baserCMS Users Community <https://basercms.net/community/>
 *
 * @copyright       Copyright (c) baserCMS Users Community
 * @link            https://basercms.net baserCMS Project
 * @package         Mail.Test.Fixture.Model.MailMessage
 * @since           baserCMS v 3.0.0
 * @license         https://basercms.net/license/index.html
 */

class MailFieldMailMessageFixture extends BaserTestFixture
{
    /**
     * Name of the object
     *
     * @var string
     */
    public $name = 'MailField';

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'mail_content_id' => '1',
            'no' => '1',
            'name' => '姓漢字',
            'field_name' => 'name_1',
            'type' => 'text',
            'head' => 'お名前',
            'attention' => '',
            'before_attachment' => '<small>[姓]</small>',
            'after_attachment' => '',
            'source' => '',
            'size' => '8',
            'rows' => null,
            'maxlength' => '255',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'name',
            'group_valid' => 'name',
            'valid' => 'VALID_NOT_EMPTY',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 1,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '1',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '2',
            'mail_content_id' => '1',
            'no' => '2',
            'name' => '名漢字',
            'field_name' => 'name_2',
            'type' => 'text',
            'head' => 'お名前',
            'attention' => '',
            'before_attachment' => '<small>[名]</small>',
            'after_attachment' => '',
            'source' => '',
            'size' => '8',
            'rows' => null,
            'maxlength' => '255',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'name',
            'group_valid' => 'name',
            'valid' => 'VALID_NOT_EMPTY',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 1,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '2',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '3',
            'mail_content_id' => '1',
            'no' => '3',
            'name' => '姓カナ',
            'field_name' => 'name_kana_1',
            'type' => 'text',
            'head' => 'フリガナ',
            'attention' => '',
            'before_attachment' => '<small>[姓]</small>',
            'after_attachment' => '',
            'source' => '',
            'size' => '8',
            'rows' => null,
            'maxlength' => '255',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'name_kana',
            'group_valid' => 'name_kana',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '3',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '4',
            'mail_content_id' => '1',
            'no' => '4',
            'name' => '名カナ',
            'field_name' => 'name_kana_2',
            'type' => 'text',
            'head' => 'フリガナ',
            'attention' => '',
            'before_attachment' => '<small>[名]</small>',
            'after_attachment' => '',
            'source' => '',
            'size' => '8',
            'rows' => null,
            'maxlength' => '255',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'name_kana',
            'group_valid' => 'name_kana',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '4',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '5',
            'mail_content_id' => '1',
            'no' => '5',
            'name' => '性別',
            'field_name' => 'sex',
            'type' => 'radio',
            'head' => '性別',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '男性|女性',
            'size' => '0',
            'rows' => '0',
            'maxlength' => '0',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => '',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '5',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '6',
            'mail_content_id' => '1',
            'no' => '7',
            'name' => 'メールアドレス',
            'field_name' => 'email_1',
            'type' => 'email',
            'head' => 'メールアドレス',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '<br />',
            'source' => '',
            'size' => '25',
            'rows' => null,
            'maxlength' => '50',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '<small>確認のため２回入力して下さい。</small><br />',
            'group_field' => 'email',
            'group_valid' => 'email',
            'valid' => 'VALID_EMAIL',
            'valid_ex' => 'VALID_EMAIL_CONFIRM',
            'auto_convert' => '',
            'not_empty' => 1,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '6',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '7',
            'mail_content_id' => '1',
            'no' => '8',
            'name' => 'メールアドレス確認',
            'field_name' => 'email_2',
            'type' => 'text',
            'head' => 'メールアドレス（確認）',
            'attention' => '<small>[確認]</small>',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '',
            'size' => '25',
            'rows' => null,
            'maxlength' => '50',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'email',
            'group_valid' => 'email',
            'valid' => 'VALID_EMAIL',
            'valid_ex' => 'VALID_EMAIL_CONFIRM',
            'auto_convert' => '',
            'not_empty' => 1,
            'use_field' => 1,
            'no_send' => 1,
            'sort' => '7',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '8',
            'mail_content_id' => '1',
            'no' => '9',
            'name' => '電話番号１',
            'field_name' => 'tel_1',
            'type' => 'text',
            'head' => '電話番号',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '-',
            'source' => '',
            'size' => '5',
            'rows' => '0',
            'maxlength' => '5',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'tel',
            'group_valid' => 'tel',
            'valid' => '',
            'valid_ex' => 'VALID_GROUP_COMPLATE',
            'auto_convert' => 'CONVERT_HANKAKU',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '8',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '9',
            'mail_content_id' => '1',
            'no' => '10',
            'name' => '電話番号２',
            'field_name' => 'tel_2',
            'type' => 'text',
            'head' => '電話番号',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '-',
            'source' => '',
            'size' => '5',
            'rows' => '0',
            'maxlength' => '5',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'tel',
            'group_valid' => 'tel',
            'valid' => '',
            'valid_ex' => 'VALID_GROUP_COMPLATE',
            'auto_convert' => 'CONVERT_HANKAKU',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '9',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '10',
            'mail_content_id' => '1',
            'no' => '11',
            'name' => '電話番号３',
            'field_name' => 'tel_3',
            'type' => 'text',
            'head' => '電話番号',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '',
            'size' => '5',
            'rows' => '0',
            'maxlength' => '5',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'tel',
            'group_valid' => 'tel',
            'valid' => '',
            'valid_ex' => 'VALID_GROUP_COMPLATE',
            'auto_convert' => 'CONVERT_HANKAKU',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '10',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '11',
            'mail_content_id' => '1',
            'no' => '12',
            'name' => '郵便番号',
            'field_name' => 'zip',
            'type' => 'autozip',
            'head' => '住所',
            'attention' => '<small>[半角数字]</small><br />',
            'before_attachment' => '〒',
            'after_attachment' => '',
            'source' => 'address_1|address_2',
            'size' => '10',
            'rows' => null,
            'maxlength' => '8',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'address',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => 'CONVERT_HANKAKU',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '11',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '12',
            'mail_content_id' => '1',
            'no' => '13',
            'name' => '都道府県',
            'field_name' => 'address_1',
            'type' => 'pref',
            'head' => '住所',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '<br />',
            'source' => '',
            'size' => '0',
            'rows' => '0',
            'maxlength' => '0',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'address',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '12',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '13',
            'mail_content_id' => '1',
            'no' => '14',
            'name' => '市区町村・番地',
            'field_name' => 'address_2',
            'type' => 'text',
            'head' => '住所',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '<br />',
            'source' => '',
            'size' => '30',
            'rows' => '0',
            'maxlength' => '200',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'address',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '13',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '14',
            'mail_content_id' => '1',
            'no' => '15',
            'name' => '建物名',
            'field_name' => 'address_3',
            'type' => 'text',
            'head' => '住所',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '',
            'size' => '30',
            'rows' => '0',
            'maxlength' => '200',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'address',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '14',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '15',
            'mail_content_id' => '1',
            'no' => '16',
            'name' => 'お問い合わせ項目',
            'field_name' => 'category',
            'type' => 'multi_check',
            'head' => 'お問い合わせ項目',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '資料請求|問い合わせ|その他',
            'size' => '0',
            'rows' => '0',
            'maxlength' => '0',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => '',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => 'VALID_NOT_UNCHECKED',
            'auto_convert' => '',
            'not_empty' => 1,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '15',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '16',
            'mail_content_id' => '1',
            'no' => '17',
            'name' => 'お問い合わせ内容',
            'field_name' => 'message',
            'type' => 'textarea',
            'head' => 'お問い合わせ内容',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '',
            'size' => '48',
            'rows' => '12',
            'maxlength' => null,
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => '',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '16',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '17',
            'mail_content_id' => '1',
            'no' => '18',
            'name' => 'ルート',
            'field_name' => 'root',
            'type' => 'select',
            'head' => 'どうやってこのサイトをお知りになりましたか？',
            'attention' => '',
            'before_attachment' => '',
            'after_attachment' => '<br />',
            'source' => '検索エンジン|web広告|紙面広告|求人案内|その他',
            'size' => '0',
            'rows' => '0',
            'maxlength' => '0',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'root',
            'group_valid' => '',
            'valid' => 'VALID_NOT_EMPTY',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 1,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '17',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '18',
            'mail_content_id' => '1',
            'no' => '19',
            'name' => 'ルートその他',
            'field_name' => 'root_etc',
            'type' => 'text',
            'head' => '',
            'attention' => '<br /><small>その他を選択された場合は内容をご入力下さい。</small>',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '',
            'size' => '30',
            'rows' => null,
            'maxlength' => '50',
            'options' => '',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'root',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => '',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '18',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
        [
            'id' => '19',
            'mail_content_id' => '99',
            'no' => '19',
            'name' => 'ルートその他',
            'field_name' => 'file_1',
            'type' => 'file',
            'head' => '',
            'attention' => '<br /><small>その他を選択された場合は内容をご入力下さい。</small>',
            'before_attachment' => '',
            'after_attachment' => '',
            'source' => '',
            'size' => '30',
            'rows' => null,
            'maxlength' => '50',
            'options' => 'maxFileSize|1|fileExt|jpg',
            'class' => '',
            'separator' => '',
            'default_value' => '',
            'description' => '',
            'group_field' => 'root',
            'group_valid' => '',
            'valid' => '',
            'valid_ex' => 'VALID_MAX_FILE_SIZE,VALID_FILE_EXT',
            'auto_convert' => '',
            'not_empty' => 0,
            'use_field' => 1,
            'no_send' => 0,
            'sort' => '18',
            'created' => '2015-01-27 12:56:54',
            'modified' => null
        ],
    ];
}
