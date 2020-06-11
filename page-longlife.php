<?php

/*
Template Name: 川端工務店長期優良住宅について
*/
?>

<?php get_header(); ?>

<?php if (wp_is_mobile()) { //モバイルデバイスでアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword_smart.png" alt="人｜地元とのつながりを第一に"></div>
<?php } else { //それ以外でアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword.png" alt="人｜地元とのつながりを第一に"></div>
<?php } ?>
<?php echo do_shortcode('[metaslider id="903"]'); ?>

<div class="container construction-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="top-title">長期優良住宅について<span class="h6"> -Long-life quality housing-</span></h4>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
            <h5 class="text-center mb-5"><span class="text-info bold">川端工務店の長期優良住宅</span><br class="d-xl-none d-lg-none d-md-none d-sm-inline">とは・・・？</h5>

			<h6 class="text-center">近年に住宅事情は、「作っては壊す」時代から「長持ちさせる」家づくりの時代へ移り変わろうとしています。<br />
長持ちさせるということは、住宅としての資産価値が失われない、つまり“住宅＝資産”として考えられるようになっていたということです。<br />
長期優良住宅を選ぶことにより、将来的に住宅を売ったり、貸したりが比較的容易にできるようになると考えられます。</h6>

			<a class="btn btn-info mt-3 mb-5" href="<?php echo get_template_directory_uri(); ?>/images/yuryou.pdf" style="width:100%;" role="button">詳細はこちら</a><br />

			<h5 class="text-center text-info bold mb-3">長期優良住宅のメリットとは？</h5><br />

			<img src="<?php echo get_template_directory_uri(); ?>/images/icons8-1-filled-100.png" width="60px" style="vertical-align:middle;"><span class="text-info h5 bold">住宅の資産価値を守る</span><br />
			<div class="h6 mb-3">日本の住宅は、築20年を過ぎると資産価値がなくなると言われています。<br />
でも「長期優良住宅制度」を用いた性能評価の高い住宅は、中古住宅としても資産価値を評価されることが期待されます。</div><br />

			<img src="<?php echo get_template_directory_uri(); ?>/images/icons8-2-filled-100.png" width="60px" style="vertical-align:middle;"><span class="text-info h5 bold">ライフサイクルコストの低減</span><br />
			<div class="h6 mb-3">建物の生涯にかかるコストを「ライフサイクルコスト」と言います。<br />
「長期優良住宅」は、耐久性や省エネ性が高く、使用期間中のランニングコストを抑えることができるので、結果として「ライフサイクルコスト」が低く抑えられます。</div><br />

			<img src="<?php echo get_template_directory_uri(); ?>/images/icons8-3-filled-100.png" width="60px" style="vertical-align:middle;"><span class="text-info h5 bold">住宅税制、住宅ローン減税、金利の優遇</span><br />
			<div class="h6 mb-3">「長期優良住宅」は、長持ちさせるための住宅機能を採用しているため、一般的住宅より建築コストが高くなる傾向にあります。<br />
しかし、次世代へ継承できる良質な住宅と考え、税金など様々な優遇措置がとられています。</div><br />

<!--			
<div class="text-info bold">住宅税制 （〜平成28年3月31日）</div>
<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2" class="ttlBase">一般住宅（自己居住用新築特例）</td>
				<td class="ttlOrange">長期優良住宅</td>
			</tr>
			<tr>
				<td rowspan="3" class="ttlBase">国<br />税</td>
				<td rowspan="3">登録免許税</td>
				<td class="bgGray">保存登記</td>
				<td class="bgGray">1.5/1000</td>
				<td class="bgOrange">1/1000</td>
			</tr>
			<tr>
				<td class="bgGray">移転登記</td>
				<td class="bgGray">3/1000</td>
				<td class="bgOrange">戸   建　2/1000<br />
					マンション　1/1000</td>
			</tr>
			<tr>
				<td class="bgGray">抵当権設定登記</td>
				<td class="bgGray">1/1000</td>
				<td class="bgOrange">1/1000</td>
			</tr>
			<tr>
				<td rowspan="3" class="ttlBase">地<br />方<br />税</td>
				<td rowspan="2">不動産取得税</td>
				<td colspan="2" class="bgGray text-center">1200万円控除</td>
				<td class="bgOrange text-center">1300万円控除</td>
			</tr>
			<tr>
				<td class="bgGray">戸籍</td>
				<td class="bgGray">1〜3年目 1/2軽減</td>
				<td class="bgOrange">1〜5年目 1/2軽減</td>
			</tr>
			<tr>
				<td>国定資産税</td>
				<td class="bgGray">マンション</td>
				<td class="bgGray">1〜5年目 1/2軽減</td>
				<td class="bgOrange">1〜7年目 1/2軽減</td>
			</tr>
		</tbody>
	</table>
</div>

			<div class="text-info bold lh15">床面積120㎡までの固定資産税を1/2に軽減<br />
			〈減税期間〉一般住宅 3年長期優良住宅 5年<br />
			住宅ローン減税 （〜平成29年12月31日）</div>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr>
				<td></td>
				<td class="ttlBase">一般住宅</td>
				<td class="ttlOrange">長期優良住宅</td>
			</tr>
			<tr>
				<td>控除対象<br />
				借入限度額</td>
				<td class="bgGray">4,000万円<br />
				平成29年入居まで</td>
				<td class="bgOrange">5,000万円<br />
				平成29年入居まで</td>
			</tr>
			<tr>
				<td>控除期間</td>
				<td class="bgGray">10年</td>
				<td class="bgOrange">10年</td>
			</tr>
			<tr>
				<td>控除率</td>
				<td class="bgGray">1.0％</td>
				<td class="bgOrange">1.2％</td>
			</tr>
			<tr>
				<td>最大控除額</td>
				<td class="bgGray">400万円</td>
				<td class="bgOrange">500万円</td>
			</tr>
		</tbody>
	</table>
</div>
-->

		</div>
    </div>
</div>

<?php get_footer(); ?>