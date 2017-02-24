# MasOffer Offer API

    GET https://api.masoffer.com/offer/all

## Mô tả
Lấy tất cả các shop đang chạy trong hệ thống MasOffer
***

## Parameters

- **pub_id** _(required)_ — Id của publisher.
- **token** _(required)_ — Token sử dụng để request.

***

## Example
**Request**

    GET https://api.masoffer.com/offer/all?pub_id=masofferdemo&token=pMPjGuvSlNjiBx7AkXZ4bKyFKemSayMdOQFjsFXUc_Y

**Return**
``` json
{
  "status": 1,
  "data": [
    {
      "name": "NhaThuoc365",
      "domain": "http://nhathuoc365.vn/",
      "offer_id": "nhathuoc365",
      "address": "Phòng 2203, nhà 24T2 Hoàng Đạo Thúy, Hà Nội ",
      "product_type": "Dược phẩm",
      "commission_rate": "<p><strong>Tất cả c&aacute;c sản phẩm&nbsp;:<span style=\"color:#FF0000\">&nbsp;14.0%</span></strong><br />\r\n&nbsp;</p>\r\n",
      "commission_rule": "<ul>\r\n\t<li>Cookies c&oacute; hiệu lực trong 30 ng&agrave;y</li>\r\n\t<li>Luật Click cuối:<br />\r\n\tNếu kh&aacute;ch h&agrave;ng click v&agrave;o một link quảng c&aacute;o kh&aacute;c của hệ thống th&igrave; hoa hồng sẽ được t&iacute;nh cho người quảng c&aacute;o cuối c&ugrave;ng.</li>\r\n\t<li>Số đơn h&agrave;ng ghi nhận:<br />\r\n\tKh&ocirc;ng giới hạn trong thời gian lưu cookie.</li>\r\n\t<li>\r\n\t<p><strong>Hoa hồng sẽ được ghi nhận với c&aacute;c đơn h&agrave;ng th&agrave;nh c&ocirc;ng, giao dịch ho&agrave;n tất, kh&ocirc;ng bị đổi trả h&agrave;ng.</strong><br />\r\n\t<strong>Tổng tiền hoa hồng sẽ được t&iacute;nh tr&ecirc;n gi&aacute; tiền thực nhận của kh&aacute;ch h&agrave;ng trả cho shop. (sau khi đ&atilde; trừ giảm gi&aacute;, khuyến mại, &hellip;)</strong><br />\r\n\tV&iacute; dụ: sản phẩm A gi&aacute;&nbsp;<strong>300,000 đ</strong>. Hoa hồng nhận được&nbsp;<strong>5%</strong><br />\r\n\tKh&aacute;ch h&agrave;ng mua sản phẩm A , d&ugrave;ng m&atilde; giảm gi&aacute;&nbsp;<strong>100,000 đ</strong><br />\r\n\tVậy hoa hồng sẽ l&agrave;&nbsp;<strong>(300,000 - 100,000) * 5%</strong></p>\r\n\t</li>\r\n</ul>\r\n\r\n<p><strong><span style=\"color:#FF0000\">Lưu &yacute;:</span> Cấm sử dụng h&igrave;nh thức chạy quảng c&aacute;o từ kh&oacute;a Brand keyword tr&ecirc;n tất cả c&aacute;c k&ecirc;nh quảng c&aacute;o search keyword như GG, CC, ... (Bao gồm cả&nbsp;c&aacute;c từ kh&oacute;a Brand Keyword cố t&igrave;nh viết sai.)<br />\r\nC&aacute;c trường hợp đơn h&agrave;ng đến từ quảng c&aacute;o n&agrave;y sẽ kh&ocirc;ng được t&iacute;nh hoa hồng.</strong></p>\r\n",
      "cookie_rule": "Không ghi đè cookies. Retargeting và các loại quảng cáo khác của Nhà cung cấp như Google Adwords, Facebook Ads... không ảnh hưởng tới quảng cáo của Publisher.",
      "about": "Ch&iacute;nh thức ra mắt từ th&aacute;ng 9 năm 2012,&nbsp;<strong>Nhathuoc365.vn</strong>&nbsp;hiện l&agrave; trang web b&aacute;n sản phẩm chăm s&oacute;c sức khỏe trực tuyến h&agrave;ng đầu tại Việt Nam; chuy&ecirc;n cung cấp c&aacute;c sản phẩm từ c&aacute;c thương hiệu nổi tiếng với mức gi&aacute; cạnh tranh nhất.&nbsp;Đến với <strong>Nhathuoc365.vn</strong>, qu&yacute; kh&aacute;ch c&oacute; thể thoả sức lựa chọn h&agrave;ng ngh&igrave;n sản phẩm kh&aacute;c nhau từ thiết bị y tế, thuốc chữa bệnh, thực phẩm chức năng đến c&aacute;c d&ograve;ng sản phẩm chăm s&oacute;c sắc đẹp v&agrave; cơ thể.",
      "avatar": "https://masoffer.r.worldssl.net/stg/images/2016/09/22/logo_nt_365eKc2r.png",
      "cover": "https://pub.masoffer.com"
    },
    {
      "name": "Lazada.vn",
      "domain": "http://www.lazada.vn",
      "offer_id": "lazada",
      "address": "Tầng 15, Toà nhà Empress. Số 136 - 142 Hai Bà Trưng, p.Đa Kao, Q.1, tp HCM",
      "product_type": "Hàng tổng hợp",
      "commission_rate": "<img alt=\"\" src=\"https://masoffer.r.worldssl.net/stg/images/2017/02/21/ti_le_lazadaUnXoS.jpg\" style=\"height:506px; width:463px\" />\r\n<p><span style=\"color:#FF0000\"><strong>&Aacute;p dụng từ 15.02.2017.</strong></span></p>\r\n",
      "commission_rule": "<p><strong>Hoa hồng sẽ được ghi nhận với c&aacute;c đơn h&agrave;ng th&agrave;nh c&ocirc;ng, giao dịch ho&agrave;n tất, kh&ocirc;ng bị đổi trả h&agrave;ng.</strong></p>\r\n\r\n<ul>\r\n\t<li>Cookies c&oacute; hiệu lực trong 30 ng&agrave;y</li>\r\n\t<li>Luật đơn h&agrave;ng đầu ti&ecirc;n:\r\n\t<div id=\"more_1\">Sau khi đơn h&agrave;ng đầu ti&ecirc;n trong 30 ng&agrave;y hiệu lực của Cookies xảy ra v&agrave; th&agrave;nh c&ocirc;ng, m&aacute;y của kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng c&ograve;n cookies nữa.</div>\r\n\t</li>\r\n\t<li>Luật Click cuối:\r\n\t<div id=\"more_2\">Nếu kh&aacute;ch h&agrave;ng click v&agrave;o một link quảng c&aacute;o kh&aacute;c của hệ thống th&igrave; hoa hồng sẽ được t&iacute;nh cho người quảng c&aacute;o cuối c&ugrave;ng.</div>\r\n\t</li>\r\n</ul>\r\n\r\n<p><strong>Ch&uacute; &yacute;: Kh&ocirc;ng &aacute;p dụng cho bản MobileApp</strong></p>\r\n\r\n<p><span style=\"color:#FF0000\">Lưu &yacute;: C&aacute;c h&igrave;nh thức sau l&agrave; vi phạm quy định của Lazada v&agrave; nh&agrave; ph&acirc;n phối vi phạm c&oacute; thể bị giữ hoa hồng, bao gồm:<br />\r\n- Mua đi b&aacute;n lại, đầu cơ, reseller...<br />\r\n- Một thiết bị (điện thoại) mua nhiều đơn h&agrave;ng<br />\r\n- Đăng trực tiếp m&atilde; giảm gi&aacute;, voucher của Lazada l&ecirc;n website c&aacute; nh&acirc;n k&egrave;m link affiliate</span></p>\r\n\r\n<p><strong>Cấm sử dụng h&igrave;nh thức chạy quảng c&aacute;o từ kh&oacute;a Brand keyword tr&ecirc;n tất cả c&aacute;c k&ecirc;nh quảng c&aacute;o search keyword như GG, CC, ... (Bao gồm cả&nbsp;c&aacute;c từ kh&oacute;a Brand Keyword cố t&igrave;nh viết sai.)<br />\r\nC&aacute;c trường hợp đơn h&agrave;ng đến từ quảng c&aacute;o n&agrave;y sẽ kh&ocirc;ng được t&iacute;nh hoa hồng.</strong></p>\r\n",
      "cookie_rule": "Các kênh truyền thông khác của Lazada có ghi đè Cookies của MasOffer (retargeting...)",
      "about": "<p>Hệ thống mua h&agrave;ng trực tuyến nhanh gọn, dễ d&agrave;ng, thuận tiện v&agrave; tiết kiệm thời gian. Đến với Lazada, bạn c&oacute; thể mua tất cả những g&igrave; m&agrave; bạn cần.</p>\r\n",
      "avatar": "https://pub.masoffer.com/assets/image/partner/lazada_icon.jpg",
      "cover": "https://pub.masoffer.com/images/offer/cover/lazada.jpg"
    },
    {
      "name": "Adayroi.com",
      "domain": "https://www.adayroi.com",
      "offer_id": "adayroi",
      "address": "Tower 2, Khu đô thị Times City, số 458 Minh Khai, Phường Vĩnh Tuy, Quận Hai Bà Trưng, Thành phố Hà Nội.",
      "product_type": "Hàng tổng hợp",
      "commission_rate": "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\">\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Du lịch</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Ẩm thực</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Spa</td>\r\n\t\t\t<td>6.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Dịch vụ</td>\r\n\t\t\t<td>6.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Điện tử c&ocirc;ng nghệ</td>\r\n\t\t\t<td>2.5%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Mẹ b&eacute;</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Nh&agrave; cửa đời sống</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>&Ocirc; t&ocirc; xe m&aacute;y</td>\r\n\t\t\t<td>0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>S&aacute;ch - VPP</td>\r\n\t\t\t<td>6.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Sức khoẻ - Sắc đẹp</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Thời trang</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Thực phẩm</td>\r\n\t\t\t<td>3.0%</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n<br />\r\n&Aacute;p dụng từ ng&agrave;y 09/01/2017<br />\r\n&nbsp;",
      "commission_rule": "<ul>\r\n\t<li>Cookies c&oacute; hiệu lực trong 30&nbsp;ng&agrave;y</li>\r\n\t<li>Luật đơn h&agrave;ng đầu ti&ecirc;n:<br />\r\n\tSau khi đơn h&agrave;ng đầu ti&ecirc;n trong 30 ng&agrave;y hiệu lực của Cookies xảy ra v&agrave; th&agrave;nh c&ocirc;ng, m&aacute;y của kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng c&ograve;n cookies nữa</li>\r\n\t<li>Luật Click cuối:\r\n\t<div id=\"more_2\">Nếu kh&aacute;ch h&agrave;ng click v&agrave;o một link quảng c&aacute;o kh&aacute;c của hệ thống th&igrave; hoa hồng sẽ được t&iacute;nh cho người quảng c&aacute;o cuối c&ugrave;ng.</div>\r\n\t</li>\r\n</ul>\r\n\r\n<p><strong>Hoa hồng sẽ được ghi nhận với c&aacute;c đơn h&agrave;ng th&agrave;nh c&ocirc;ng, giao dịch ho&agrave;n tất, kh&ocirc;ng bị đổi trả h&agrave;ng.</strong><br />\r\n<strong>Tổng tiền hoa hồng sẽ được t&iacute;nh tr&ecirc;n gi&aacute; tiền thực nhận của kh&aacute;ch h&agrave;ng trả cho shop. (sau khi đ&atilde; trừ giảm gi&aacute;, khuyến mại, &hellip;)</strong><br />\r\nV&iacute; dụ: sản phẩm A gi&aacute; <strong>300,000 đ</strong>. Hoa hồng nhận được <strong>5%</strong><br />\r\nKh&aacute;ch h&agrave;ng mua sản phẩm A , d&ugrave;ng m&atilde; giảm gi&aacute; <strong>100,000 đ</strong><br />\r\nVậy hoa hồng sẽ l&agrave; <strong>(300,000 - 100,000) * 5%</strong></p>\r\n\r\n<p><strong><span style=\"color:#FF0000\">Lưu &yacute;:</span> Cấm sử dụng h&igrave;nh thức chạy quảng c&aacute;o từ kh&oacute;a Brand keyword tr&ecirc;n tất cả c&aacute;c k&ecirc;nh quảng c&aacute;o search keyword như GG, CC, ... (Bao gồm cả&nbsp;c&aacute;c từ kh&oacute;a Brand Keyword cố t&igrave;nh viết sai.)<br />\r\nC&aacute;c trường hợp đơn h&agrave;ng đến từ quảng c&aacute;o n&agrave;y sẽ kh&ocirc;ng được t&iacute;nh hoa hồng.</strong></p>\r\n",
      "cookie_rule": "Các kênh truyền thông khác của Adayroi có ghi đè Cookies của MasOffer (retargeting...)",
      "about": "<p>Adayroi l&agrave; website thương mại điện tử của C&ocirc;ng ty Cổ phần Dịch vụ Thương Mại Tổng hợp VinCommerce, một th&agrave;nh vi&ecirc;n của Tập đo&agrave;n Vingroup.</p>\r\n\r\n<p>Adayroi l&agrave; m&ocirc; h&igrave;nh đại si&ecirc;u thị điện tử - &quot;tất cả trong một&quot;. Adayroi cung cấp nhiều ng&agrave;nh h&agrave;ng đa dạng, từ những h&agrave;ng ho&aacute; gi&aacute; trị lớn như bất động sản, đến c&aacute;c sản phẩm - dịch vụ phục vụ c&aacute;c nhu cầu thiết thực của cuộc sống h&agrave;ng ng&agrave;y như thực phẩm, nhu yếu phẩm, thời trang, du lịch, điện tử, đồ gia dụng, &hellip; vượt trội cả về chủng loại v&agrave; số lượng.</p>\r\n",
      "avatar": "https://pub.masoffer.com/images/offer/adayroi.jpg",
      "cover": "https://pub.masoffer.com"
    },
    {
      "name": "Tiki.vn",
      "domain": "http://tiki.vn/",
      "offer_id": "tiki",
      "address": "70 Lữ Gia, phường 15, Quận 11, TP. Hồ Chí Minh",
      "product_type": "Hàng tổng hợp",
      "commission_rate": "<div class=\"row\">\r\n<div class=\"col-md-6\"><strong>S&aacute;ch: <span style=\"color:#FF0000\">4.0%</span><br />\r\nEnglish Books: <span style=\"color:#FF0000\">4.0%</span><br />\r\nThời trang: <span style=\"color:#FF0000\">4.0%</span><br />\r\nL&agrave;m đẹp - Sức khỏe: <span style=\"color:#FF0000\">4.0%</span><br />\r\nĐiện thoại - M&aacute;y t&iacute;nh bảng: <span style=\"color:#FF0000\">1.1%</span><br />\r\nThiết bị Số - Phụ kiện số: <span style=\"color:#FF0000\">4.0%</span><br />\r\nThiết bị văn ph&ograve;ng phẩm: <span style=\"color:#FF0000\">4.0%</span><br />\r\nĐiện Gia dụng: <span style=\"color:#FF0000\">4.0%</span><br />\r\nNh&agrave; cửa - Đời sống: <span style=\"color:#FF0000\">4.0%</span><br />\r\nĐồ chơi: <span style=\"color:#FF0000\">4.0%</span><br />\r\nMẹ v&agrave; b&eacute;: <span style=\"color:#FF0000\">2.5%</span><br />\r\nTivi - Thiết bị nghe nh&igrave;n: <span style=\"color:#FF0000\">1.1%</span><br />\r\nB&aacute;ch h&oacute;a Online: <span style=\"color:#FF0000\">4.0%</span><br />\r\nThể thao &amp; D&atilde; Ngoại: <span style=\"color:#FF0000\">4.0%</span><br />\r\nM&aacute;y t&iacute;nh &amp; Laptop: <span style=\"color:#FF0000\">1.1%</span><br />\r\nM&aacute;y ảnh &amp; M&aacute;y quay phim:&nbsp;<span style=\"color:#FF0000\">1.1%</span><br />\r\nKh&aacute;c: <span style=\"color:#FF0000\">1.1%</span></strong></div>\r\n</div>\r\n",
      "commission_rule": "<ul>\r\n\t<li>Cookies c&oacute; hiệu lực trong 30 ng&agrave;y</li>\r\n\t<li>Luật Click cuối:\r\n\t<div id=\"more_2\">Nếu kh&aacute;ch h&agrave;ng click v&agrave;o một link quảng c&aacute;o kh&aacute;c của hệ thống th&igrave; hoa hồng sẽ được t&iacute;nh cho người quảng c&aacute;o cuối c&ugrave;ng.</div>\r\n\t</li>\r\n\t<li>\r\n\t<div>Số đơn h&agrave;ng ghi nhận:\r\n\t<div id=\"more_2\">Kh&ocirc;ng giới hạn trong thời gian lưu cookie.</div>\r\n\t</div>\r\n\t</li>\r\n</ul>\r\n\r\n<p><strong>Hoa hồng sẽ được ghi nhận với c&aacute;c đơn h&agrave;ng th&agrave;nh c&ocirc;ng, giao dịch ho&agrave;n tất, kh&ocirc;ng bị đổi trả h&agrave;ng.</strong><br />\r\n<strong>Tổng tiền hoa hồng sẽ được t&iacute;nh tr&ecirc;n gi&aacute; tiền thực nhận của kh&aacute;ch h&agrave;ng trả cho shop. (sau khi đ&atilde; trừ giảm gi&aacute;, khuyến mại, &hellip;)</strong><br />\r\nV&iacute; dụ: sản phẩm A gi&aacute; <strong>300,000 đ</strong>. Hoa hồng nhận được <strong>5%</strong><br />\r\nKh&aacute;ch h&agrave;ng mua sản phẩm A , d&ugrave;ng m&atilde; giảm gi&aacute; <strong>100,000 đ</strong><br />\r\nVậy hoa hồng sẽ l&agrave; <strong>(300,000 - 100,000) * 5%</strong><br />\r\n&nbsp;</p>\r\n\r\n<p><strong><span style=\"color:#FF0000\">Lưu &yacute;:</span> Cấm sử dụng h&igrave;nh thức chạy quảng c&aacute;o từ kh&oacute;a Brand keyword tr&ecirc;n tất cả c&aacute;c k&ecirc;nh quảng c&aacute;o search keyword như GG, CC, ... (Bao gồm cả&nbsp;c&aacute;c từ kh&oacute;a Brand Keyword cố t&igrave;nh viết sai.)</strong></p>\r\n\r\n<p><strong>C&aacute;c trường hợp đơn h&agrave;ng đến từ quảng c&aacute;o n&agrave;y sẽ kh&ocirc;ng được t&iacute;nh hoa hồng.</strong></p>\r\n",
      "cookie_rule": "Không ghi đè cookies. Retargeting và các loại quảng cáo khác của shop như Google Adwords, FB ads không ảnh hưởng tới quảng cáo của Publisher.",
      "about": "<p>Th&agrave;nh lập từ th&aacute;ng 3/2010, đến nay website thương mại điện tử Tiki.vn cung cấp c&aacute;c sản phẩm thuộc 10 ng&agrave;nh h&agrave;ng kh&aacute;c nhau.<br />\r\nVới mục ti&ecirc;u tạo ra những trải nghiệm mua sắm trực tuyến tuyệt vời, Tiki.vn lu&ocirc;n nỗ lực kh&ocirc;ng ngừng nhằm n&acirc;ng cao chất lượng dịch vụ.</p>\r\n",
      "avatar": "https://pub.masoffer.com/images/offer/tiki.png",
      "cover": "https://pub.masoffer.com"
    }
  ]
}
```