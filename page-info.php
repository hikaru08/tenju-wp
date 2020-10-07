<?php
/*
Template Name: info
*/
?>

<?php get_header()?>
<div class='service_main'>
<div class='service_main__photo'>
<img alt="花の写真" src="<?php echo get_template_directory_uri()?>/images/info_image.jpg" />
<div class='service_main__photo__title'>
<span>ご相談・お見積り</span>
</div>
<nav>
<div class="breadcrumb"><a href="<?php echo home_url(); ?>">トップページ</a> &rsaquo; <span class="current">ご相談・お見積り</span></div>
</nav>

</div>
</div>
<div class='service_contents'>
<div class='service_contents__title'>
<span>無料相談・お見積り</span>
</div>
<div class='info-discription'>
<span>お問い合わせいただいてから、原則２営業日内に当社スタッフよりお返事させていただきます。</span>
</div>
<div class='info-error'>
<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

<div class='error'>
</div>

</div>
<form class='info'></form>
<form action="/root/confirm" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="0x04AkvQ9HCh+9S4KdPmw6VdckXzftr2AFWZJZrxrBhfSa1v4KviJPotSFSPTmjHNanfEFdmKHlIlXOh2hlB0A==" /><div class='info__title'>
<span>お客さま情報</span>
</div>
<div class='info__form'>
<div class='info__form__name'>
<div class='info__form__name__title'>
<span>お名前</span>
<span class='must'>必須</span>
</div>
<div class='info__form__name__content'>
<input class="form-box" placeholder="例)小嶋 祥介" id="name_full" type="text" name="contact[name_full]" />
</div>
</div>
<div class='info__form__name'>
<div class='info__form__name__title'>
<span>フリガナ</span>
<span class='must'>必須</span>
</div>
<div class='info__form__name__content'>
<input class="form-box" placeholder="例)コジマ ヨシユキ" id="name_cana" type="text" name="contact[name_cana]" />
</div>
</div>
<div class='info__form__number'>
<div class='info__form__number__title'>
<span>お電話番号</span>
<span class='must'>必須</span>
</div>
<div class='info__form__number__content'>
<input class="form-box" placeholder="例)090-1234-5678" type="tel" name="contact[phone]" id="contact_phone" />
</div>
</div>
<div class='info__form__mail'>
<div class='info__form__mail__title'>
<span>メールアドレス</span>
<span class='self'>任意</span>
</div>
<div class='info__form__mail__content'>
<input class="form-box" placeholder="例)tenju.eco@gmail.com" type="email" name="contact[email]" id="contact_email" />
</div>
</div>
<div class='info__form__address'>
<div class='info__form__address__title'>
<span>現地ご住所</span>
<span class='must'>必須</span>
</div>
<div class='info__form__address__content'>
<div class='info__form__address__content__post'>
<span>〒</span>
<input class="form-box postcode-box" type="text" name="contact[zip1]" id="contact_zip1" />
<span>ー</span>
<input onKeyUp="AjaxZip3.zip2addr(&#39;contact[zip1]&#39;, &#39;contact[zip2]&#39;, &#39;contact[address1]&#39;, &#39;contact[address2]&#39;);" class="form-box postcode-box" type="text" name="contact[zip2]" id="contact_zip2" />
</div>
<div class='select-box'>
<select class="form-box prefecture-box" name="contact[address1]" id="contact_address1"><option value="">---</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option></select>
</div>
<input placeholder="市区町村" class="form-box city-box" type="text" name="contact[address2]" id="contact_address2" />
<input placeholder="番地・建物名" class="form-box address-box" type="text" name="contact[address3]" id="contact_address3" />
</div>
</div>
<div class='info__form__detail'>
<div class='info__form__detail__title'>
<span>お問い合わせ内容</span>
<span class='self'>任意</span>
</div>
<div class='info__form__detail__content'>
<textarea cols="60" rows="10" placeholder="例)生前整理をして頂きたいのですが、平日の午前中に見積もりに来ていただくことは出来ますか？今月中に作業をすませて欲しいので、そちらも可能かどうかお返事いただきたいです。" class="form-box" name="contact[content]" id="contact_content">
</textarea>
</div>
</div>
</div>
<div class='info__submit'>
<div class='info__submit__attention'>
<div class='info__submit__attention__text'>
<span class='title'>
プライバシーポリシー
</span>
<span class='discription'>
株式会社天授(以下『当社』という)は、個人情報に関する法令の遵守、個人情報の適切な取り扱い及び管理を徹底し、大切な個人情報の保護につとめてまいります。
</span>
<span class='sub-title'>
個人情報の収集および利用
</span>
<span class='discription'>
個人情報を収集する際には利用目的をお知らせします。
<br>
個人情報は、その利用目的をお知らせしてご本人の同意が得られた上でご提供いただきます。ご提供いただいた個人情報は、お知らせした利用目的の範囲を超えて利用しません。
</span>
<span class='discription'>
利用目的の範囲について
<br>
・業務上のご連絡をする場合
<br>
・当社が取り扱う商品及びサービスに関するご案内をする場合
<br>
・お客様からのお問い合わせまたはご依頼等への対応をさせていただく場合
<br>
・その他、お客様に事前にお知らせし、ご同意をいただいた目的の場合
</span>
<span class='sub-title'>
個人情報の第三者への提供・開示・訂正・消去
</span>
<span class='discription'>
当社は、お客様の同意なしに第三者へお客様の個人情報の提供は行いません。
<br>
但し個人情報に適用される法律、その他の規範により、当社が従うべき法令上の義務等の特別な事情がある場合は、この限りではありません。
<br>
個人情報の開示・訂正・提供範囲の変更や削除を本人から依頼された場合には、合理的な範囲ですみやかに対応します。
</span>
<span class='sub-title'>
個人情報の安全管理措置
</span>
<span class='discription'>
徹底した管理によって個人情報の正確性及び安全性を確保します。
<br>
また、ご提供いただいた個人情報の紛失、破壊、改ざん及び漏洩等の防止に努めます。
<br>
回収致しました物品に関しても、分別・適切な処理を行い、お客様の個人を特定する情報が残ることはございません。
<br>
個人情報を扱う業務を他の会社に委託する場合、個人情報を収集するときの承諾に基づく利用、提供、安全管理を守るように、委託先に対する適切な契約や指導・管理をします。
</span>
<span class='sub-title'>
継続的な改善について
</span>
<span class='discription'>
当社が保有する個人情報に関して適用される法令、規則を遵守するとともに、適切な運用が実施されるよう管理と必要な是正を行い、個人情報保護の取り組みを継続的に見直し改善実施いたします。
</span>
</div>
</div>
<div class='info__submit__check'>
<label for='agree'>
上記規約内容に同意する
</label>
<input class='agree' type='checkbox'>
</div>
<div class='info__submit__button'>
<input type="submit" name="commit" value="入力内容の確認" class="submit-btn" data-disable-with="入力内容の確認" />
</div>
</div>
</form></div>
<?php get_footer()?>