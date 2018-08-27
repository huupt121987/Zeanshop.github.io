-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 10:55 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zean_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `ma_bai_viet` int(11) NOT NULL,
  `ma_loai_bai_viet` int(11) DEFAULT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `tieu_de` varchar(200) CHARACTER SET utf8 NOT NULL,
  `noi_dung_tom_tat` text CHARACTER SET utf8 NOT NULL,
  `noi_dung_chi_tiet` text CHARACTER SET utf8 NOT NULL,
  `ngay_gui_bai` datetime NOT NULL,
  `ngay_xuat_ban` datetime DEFAULT NULL,
  `ngay_het_han` datetime DEFAULT NULL,
  `so_lan_xem` int(11) NOT NULL,
  `xuat_ban` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`ma_bai_viet`, `ma_loai_bai_viet`, `ma_nguoi_dung`, `tieu_de`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `ngay_gui_bai`, `ngay_xuat_ban`, `ngay_het_han`, `so_lan_xem`, `xuat_ban`) VALUES
(1, 0, 1, 'Giới thiệu về công ty', '', '<p>\r\n	<strong>C&ocirc;ng ty </strong><strong>Cổ Phần Thương Mại Dịch Vụ</strong><strong> </strong><span style="font-weight: bold;">Alphatek Computer </span>l&agrave; C&ocirc;ng ty hoạt động trong nhiều lĩnh vực trong đ&oacute; m&aacute;y vi t&iacute;nh v&agrave; thiết bị văn ph&ograve;ng l&agrave; ng&agrave;nh chủ lực. <span style="font-weight: bold;">Alphatek Computer</span>c&oacute; một đội ngũ nh&acirc;n vi&ecirc;n c&oacute; tr&igrave;nh độ chuy&ecirc;n m&ocirc;n cao, đủ khả năng để c&oacute; thể đ&aacute;p ứng mọi y&ecirc;u cầu khắt khe nhất của qu&iacute; kh&aacute;ch h&agrave;ng.<br />\r\n	Kh&ocirc;ng những thế, đội ngũ nh&acirc;n vi&ecirc;n của <span style="font-weight: bold;">Alphatek Computer</span>c&ograve;n l&agrave; những người đầy l&ograve;ng nhiệt t&igrave;nh v&agrave; c&oacute; th&aacute;i độ rất niềm nở trong cung c&aacute;ch phục vụ kh&aacute;ch h&agrave;ng.</p>\r\n<p>\r\n	<strong>C&ocirc;ng ty Cổ Phần Thương Mại Dịch Vụ </strong><strong>Alphatek Computer</strong> tọa lạc ngay khu vực trung t&acirc;m th&agrave;nh phố, tại số 357 L&ecirc; Hồng Phong, Quận 10, TP Hồ Ch&iacute; Minh.</p>\r\n<p>\r\n	Được th&agrave;nh lập từ th&aacute;ng 04 năm 1997, Phong Vũ lu&ocirc;n l&agrave; nh&agrave; ph&acirc;n phối c&aacute;c sản phẩm v&agrave; linh kiện m&aacute;y t&iacute;nh, thiết bị văn ph&ograve;ng, th&ocirc;ng tin li&ecirc;n lạc v&agrave; giải tr&iacute; do c&aacute;c h&atilde;ng điện tử h&agrave;ng đầu tr&ecirc;n thế giới sản xuất. Mức gi&aacute; sản phẩm do Phong Vũ cung cấp lu&ocirc;n ph&ugrave; hợp trong m&ocirc;i trường cạnh tranh, chất lượng sản phẩm lu&ocirc;n được Phong Vũ đảm bảo.</p>\r\n<p>\r\n	<strong>Alphatek Computer</strong> c&ograve;n l&agrave; địa chỉ tin cậy đối với kh&aacute;ch h&agrave;ng c&oacute; nhu cầu bảo h&agrave;nh v&agrave; bảo tr&igrave; cho c&aacute;c loại m&aacute;y t&iacute;nh để b&agrave;n, m&aacute;y t&iacute;nh x&aacute;ch tay, m&aacute;y in, UPS (thiết bị điện), v&agrave; c&aacute;c thiết bị ngoại vi. Với c&aacute;c loại h&igrave;nh dịch vụ bảo h&agrave;nh v&agrave; bảo tr&igrave; tận nơi, bảy ng&agrave;y trong tuần, ch&uacute;ng t&ocirc;i bảo đảm tối ưu h&oacute;a năng lực c&aacute;c m&aacute;y m&oacute;c, thiết bị của kh&aacute;ch h&agrave;ng.</p>\r\n<p>\r\n	<span style="font-weight: bold;">Alphatek Computer</span> đ&atilde; v&agrave; đang cung cấp giải ph&aacute;p mạng cho c&aacute;c tổ chức, doanh nghiệp hoặc c&aacute; nh&acirc;n kinh doanh internet. Ch&uacute;ng t&ocirc;i hiện c&oacute; trong tay c&aacute;c phương tiện hiện đại nhất, c&oacute; thể lắp đặt phần cứng v&agrave; c&agrave;i đặt phần mềm quản l&yacute;, duy tr&igrave; t&iacute;nh ổn định, k&eacute;o d&agrave;i tối đa tuổi thọ của to&agrave;n bộ hệ thống.</p>\r\n<p>\r\n	Đội ngũ nh&acirc;n vi&ecirc;n v&agrave; quản l&yacute; của <strong>Alphatek Computer</strong> lu&ocirc;n được lựa chọn kỹ c&agrave;ng trước khi trải qua qu&aacute; tr&igrave;nh huấn luyện v&agrave; cập nhật thường xuy&ecirc;n những th&agrave;nh tựu mới nhất về dịch vụ kh&aacute;ch h&agrave;ng, dịch vụ kỹ thuật v&agrave; sản phẩm.</p>\r\n<p>\r\n	<strong>&quot;Lấy sự H&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave;m niềm Hạnh ph&uacute;c của ch&uacute;ng ta&quot; l&agrave; những g&igrave; m&agrave; to&agrave;n thể nh&acirc;n vi&ecirc;n c&ocirc;ng ty Alphatek Computer đang ng&agrave;y đ&ecirc;m phấn đấu !&quot;</strong></p>\r\n', '2011-03-10 00:00:00', '2011-03-10 00:00:00', '0000-00-00 00:00:00', 0, 1),
(2, 0, 1, 'Chính sách bảo hành', '', '<p>\r\n	<strong>I- Cam kết bảo h&agrave;nh của Alphatek Computer:</strong></p>\r\n<p>\r\n	1.1- Đối với những thiết bị được bảo h&agrave;nh từ 24 th&aacute;ng trở l&ecirc;n b&aacute;n ra trong v&ograve;ng 01&gt;06 th&aacute;ng nếu c&oacute; vấn đề g&igrave; trục trặc:</p>\r\n<p>\r\n	* Ch&uacute;ng t&ocirc;i sẽ đổi ngay cho c&aacute;c bạn một sản phẩm mới 100% ngay lập tức</p>\r\n<p>\r\n	1.2- Đối với những thiết bị b&aacute;n ra trong v&ograve;ng từ&nbsp; 06 &gt; 12 th&aacute;ng nếu c&oacute; vấn đề g&igrave; trục trặc:</p>\r\n<p>\r\n	* Ch&uacute;ng t&ocirc;i cam kết trả h&agrave;ng bảo h&agrave;nh cho c&aacute;c bạn tối đa trong v&ograve;ng 40h l&agrave;m việc.</p>\r\n<p>\r\n	* Trong thời gian đ&oacute; bạn sẽ được Ch&uacute;ng t&ocirc;i cho mượn thiết bị kh&aacute;c để sử dụng tạm thời.</p>\r\n<p>\r\n	1.3- Đối với những thiết bị b&aacute;n ra trong v&ograve;ng từ 12 th&aacute;ng trở l&ecirc;n nếu c&oacute; vấn đề g&igrave; trục trặc:</p>\r\n<p>\r\n	* Alphatek cam kết trả h&agrave;ng bảo h&agrave;nh cho c&aacute;c bạn tối đa trong v&ograve;ng 72h l&agrave;m việc.</p>\r\n<p>\r\n	* Trong thời gian đ&oacute; bạn sẽ được Ch&uacute;ng t&ocirc;i cho mượn thiết bị kh&aacute;c để sử dụng tạm thời.</p>\r\n<p>\r\n	1.4- Đối với c&aacute;c kh&aacute;ch h&agrave;ng c&oacute; đăng k&yacute; dịch vụ bảo h&agrave;nh tại nơi sử dụng:</p>\r\n<p>\r\n	* Khi c&oacute; bất cứ trục trặc g&igrave; về m&aacute;y t&iacute;nh, trong v&ograve;ng 2h kể từ khi nhận được th&ocirc;ng b&aacute;o ch&uacute;ng t&ocirc;i sẽ c&oacute; mặt để khắc phục sự cố. Trong trường hợp ngo&agrave;i thời gian l&agrave;m việc, ch&uacute;ng t&ocirc;i sẽ khắc phục ngay v&agrave;o đầu giờ của buổi l&agrave;m việc tiếp theo.</p>\r\n<p>\r\n	* Tất cả c&aacute;c thiết bị sẽ được khắc phục ngay tại chỗ, trường hợp kh&ocirc;ng thể sửa chữa được, ch&uacute;ng t&ocirc;i sẽ c&oacute; ngay thiết bị kh&aacute;c để qu&iacute; kh&aacute;ch sử dụng tạm thời.</p>\r\n<p>\r\n	<strong>II. Một v&agrave;i lưu &yacute; về c&aacute;c cam kết n&agrave;y :</strong></p>\r\n<p>\r\n	2.1 Điều kiện được đổi ngay: Sản phẩm bị lỗi c&ograve;n nguy&ecirc;n hiện trạng ban đầu (kh&ocirc;ng bị trầy xước, biến dạng v&agrave; c&ograve;n đầy đủ c&aacute;c phụ kiện k&egrave;m theo như vỏ hộp, s&aacute;ch hướng dẫn, đĩa c&agrave;i, &hellip;)</p>\r\n<p>\r\n	-&nbsp;&nbsp;&nbsp; Mục n&agrave;y chỉ &aacute;p dụng với đối tượng kh&aacute;ch h&agrave;ng l&agrave; người ti&ecirc;u d&ugrave;ng cuối c&ugrave;ng, kh&ocirc;ng &aacute;p dụng đối với c&aacute;c sản phẩm l&agrave; m&aacute;y t&iacute;nh x&aacute;ch tay, m&aacute;y chiếu, m&aacute;y fax, m&aacute;y in, m&aacute;y photocopy, m&aacute;y huỷ t&agrave;i liệu.</p>\r\n<p>\r\n	-&nbsp;&nbsp;&nbsp; Chỉ &aacute;p dụng với c&aacute;c sản phẩm bị lỗi do nh&agrave; Sản xuất.</p>\r\n<p>\r\n	<strong><em>2.2. Bảo h&agrave;nh trong cả trường hợp ch&aacute;y nổ IC, phồng tụ.</em></strong></p>\r\n<p>\r\n	Mặc d&ugrave; như c&aacute;c bạn đ&atilde; biết (theo qui chế bảo h&agrave;nh ở Việt Nam &amp; tr&ecirc;n Thế giới) l&agrave; trong trường hợp n&agrave;y c&ocirc;ng ty Alphatek sẽ kh&ocirc;ng được c&aacute;c nh&agrave; cung cấp &amp; c&aacute;c h&atilde;ng chấp nhận bảo h&agrave;nh. Thế nhưng c&ocirc;ng ty&nbsp; vẫn hỗ trợ c&aacute;c kh&aacute;ch h&agrave;ng của m&igrave;nh một c&aacute;ch tối đa c&oacute; thể nhằm khẳng định sự vượt trội về Chất lượng dịch vụ của Alphatek</p>\r\n<p>\r\n	Đối với những sản phẩm vi phạm điều kiện bảo h&agrave;nh của h&atilde;ng như: ch&aacute;y nổ IC, phồng tụ, ch&uacute;ng t&ocirc;i sẵn s&agrave;ng hỗ trợ bảo h&agrave;nh cho kh&aacute;ch h&agrave;ng (<em>chỉ &aacute;p dụng đối với kh&aacute;ch h&agrave;ng l&agrave; người ti&ecirc;u d&ugrave;ng cuối c&ugrave;ng</em>).</p>\r\n<p>\r\n	<strong><em>2.3. Cho kh&aacute;ch h&agrave;ng mượn sản phẩm để sử dụng trong thời gian gửi bảo h&agrave;nh.</em></strong></p>\r\n<p>\r\n	Để c&ocirc;ng việc của Qu&yacute; kh&aacute;ch h&agrave;ng kh&ocirc;ng bị gi&aacute;n đoạn, trong thời gian sản phẩm của Qu&yacute; kh&aacute;ch đang được bảo h&agrave;nh, ch&uacute;ng t&ocirc;i tạm thời cho Qu&yacute; kh&aacute;ch mượn 01 sản phẩm c&oacute; t&iacute;nh năng tương tự để sử dụng, việc n&agrave;y ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n<p>\r\n	<strong><em>24. Trường hợp kh&aacute;ch h&agrave;ng muốn n&acirc;ng cấp sản phẩm.</em></strong></p>\r\n<p>\r\n	Trong một số trường hợp, khi kh&aacute;ch h&agrave;ng muốn n&acirc;ng cấp, thay đổi sản phẩm, C&ocirc;ng ty sẽ nhập lại sản phẩm cũ với gi&aacute; thoả thuận.</p>\r\n<p>\r\n	<strong><em>2.5. Hỗ trợ kh&aacute;ch h&agrave;ng trong việc t&igrave;m lại th&ocirc;ng tin bảo h&agrave;nh.</em></strong></p>\r\n<p>\r\n	Đối với c&aacute;c sản phẩm được mua tại C&ocirc;ng ty Alphatek nhưng vi phạm điều kiện về thủ tục bảo h&agrave;nh như: phiếu bảo h&agrave;nh bị mất, r&aacute;ch, nh&agrave;u n&aacute;t. Ch&uacute;ng t&ocirc;i sẽ hỗ trợ kh&aacute;ch h&agrave;ng trong việc t&igrave;m lại th&ocirc;ng tin về sản phẩm (trong khả năng c&oacute; thể) để sản phẩm của Qu&yacute; kh&aacute;ch được bảo h&agrave;nh theo quy định.</p>\r\n<p>\r\n	<strong><em>2.6. Nhận sửa chữa dịch vụ với ph&iacute; ưu đ&atilde;i.</em></strong></p>\r\n<p>\r\n	Đối với c&aacute;c sản phẩm vi phạm điều kiện bảo h&agrave;nh của C&ocirc;ng ty dẫn tới việc sản phẩm kh&ocirc;ng được hưởng dịch vụ bảo h&agrave;nh, C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; ch&iacute;nh s&aacute;ch nhận sửa chữa dịch vụ với ph&iacute; ưu đ&atilde;i. Căn cứ v&agrave;o kết quả kiểm tra t&igrave;nh trạng của sản phẩm, ch&uacute;ng t&ocirc;i sẽ đề xuất hướng giải quyết tốt nhất cho kh&aacute;ch h&agrave;ng v&agrave; thực hiện b&aacute;o gi&aacute; chi ph&iacute; sửa chữa trong thời gian 2 ng&agrave;y để Qu&yacute; kh&aacute;ch h&agrave;ng xem x&eacute;t.</p>\r\n<p>\r\n	<strong><em>2.7. Ưu đ&atilde;i đặc biệt d&agrave;nh cho bất kỳ kh&aacute;ch h&agrave;ng n&agrave;o đến với Alphatek.</em></strong></p>\r\n<p>\r\n	Trong bất kể thời gian l&agrave;m việc n&agrave;o của Trung t&acirc;m bảo h&agrave;nh Alphatek , Trung t&acirc;m tổ chức bảo tr&igrave;, bảo dưỡng, c&agrave;i đặt phần mềm miễn ph&iacute; cho tất cả c&aacute;c kh&aacute;ch h&agrave;ng đến với Trung t&acirc;m. Trung t&acirc;m cung cấp dịch vụ miễn ph&iacute; cả với những sản phẩm kh&ocirc;ng phải do C&ocirc;ng ty cung cấp. Ngo&agrave;i ra, trong qu&aacute; tr&igrave;nh sử dụng c&aacute;c sản phẩm Tin học của m&igrave;nh, nếu gặp bất kỳ vướng mắc, trở ngại n&agrave;o Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với Trung t&acirc;m bảo h&agrave;nh Alphatek để được giải đ&aacute;p ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n<p>\r\n	<strong>III. Thời hạn bảo h&agrave;nh.</strong></p>\r\n<p>\r\n	Qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng xem th&ocirc;ng tin về thời hạn bảo h&agrave;nh của c&aacute;c sản phẩm tr&ecirc;n phiếu bảo h&agrave;nh, b&aacute;o gi&aacute; in, b&aacute;o gi&aacute; tr&ecirc;n hệ thống Website của C&ocirc;ng ty.</p>\r\n<p>\r\n	<strong>IV. Điều kiện bảo h&agrave;nh.</strong></p>\r\n<p>\r\n	4.1. C&aacute;c điều kiện bảo h&agrave;nh của sản phẩm được tu&acirc;n thủ theo quy định của nh&agrave; ph&acirc;n phối hoặc của h&atilde;ng sản xuất.</p>\r\n<p>\r\n	4.2. C&aacute;c trường hợp bị coi l&agrave; vi phạm điều kiện bảo h&agrave;nh, bao gồm:</p>\r\n<p>\r\n	- Sản phẩm hết thời hạn bảo h&agrave;nh;</p>\r\n<p>\r\n	- Kh&ocirc;ng c&oacute; Phiếu bảo h&agrave;nh;</p>\r\n<p>\r\n	- Phiếu bảo h&agrave;nh bị nh&agrave;u n&aacute;t kh&ocirc;ng đọc được;</p>\r\n<p>\r\n	- Phiếu v&agrave; tem bảo h&agrave;nh tr&ecirc;n sản phẩm kh&ocirc;ng đồng nhất;</p>\r\n<p>\r\n	- Th&ocirc;ng tin tr&ecirc;n Phiếu bảo h&agrave;nh bị sửa đổi, tẩy xo&aacute;;</p>\r\n<p>\r\n	- R&aacute;ch tem hoặc kh&ocirc;ng c&oacute; tem của C&ocirc;ng ty, của nh&agrave; ph&acirc;n phối, h&atilde;ng sản xuất;</p>\r\n<p>\r\n	- Số seri, m&atilde; vạch, th&ocirc;ng số kỹ thuật tr&ecirc;n sản phẩm bị mờ kh&ocirc;ng đọc được, bị cạo, bị sửa hoặc r&aacute;ch;</p>\r\n<p>\r\n	- Hỏng do thi&ecirc;n tai, hoả hoạn, nguồn điện kh&ocirc;ng b&igrave;nh thường;</p>\r\n<p>\r\n	- Sản phẩm bị rơi, bị va đập. Sản phẩm bị lỗi do Qu&yacute; kh&aacute;ch vận chuyển hoặc lắp đặt sai quy c&aacute;ch;</p>\r\n<p>\r\n	- Sản phẩm kh&ocirc;ng c&ograve;n nguy&ecirc;n trạng th&aacute;i vật l&yacute; ban đầu;</p>\r\n<p>\r\n	- Sản phẩm c&oacute; dấu hiệu đ&atilde; bị c&ocirc;n tr&ugrave;ng x&acirc;m nhập;</p>\r\n<p>\r\n	- C&aacute;c phụ kiện ti&ecirc;u hao trong qu&aacute; tr&igrave;nh sử dụng như hộp mực, băng mực, đầu kim, băng xo&aacute;, quạt, c&aacute;c loại c&aacute;p&hellip;</p>\r\n<p>\r\n	Sản phẩm bị lỗi do kh&aacute;ch h&agrave;ng tự &yacute; sửa chữa trước khi đem đi bảo h&agrave;nh</p>\r\n<p>\r\n	- Đối với những thiết bị của qu&iacute; kh&aacute;ch mua qu&aacute; thời gian 01 th&aacute;ng th&igrave; c&aacute;c thiết bị trả h&agrave;ng bảo h&agrave;nh của c&ocirc;ng ty Alphatek&nbsp; c&oacute; thể l&agrave; mới 100% hoặc c&oacute; thể kh&ocirc;ng mới 100% nhưng tất cả đều trong trạng th&aacute;i hoạt động tốt.</p>\r\n<p>\r\n	- Ch&iacute;nh s&aacute;ch bảo h&agrave;nh &quot;1 đổi 1&quot; kh&ocirc;ng được &aacute;p dụng cho một số thiết bị đặc biệt như: Notebook, Server, Projector, Photocopy... &amp; c&aacute;c thiết bị m&agrave; qu&iacute; kh&aacute;ch h&agrave;ng đ&atilde; chọn phương thức tự mang đến TT bảo h&agrave;nh của h&atilde;ng.</p>\r\n<p align="justify">\r\n	- Những thiết bị mang đến bảo h&agrave;nh phải c&oacute; đầy đủ điều kiện để được bảo h&agrave;nh theo qui chế bảo h&agrave;nh của Alphatek<br />\r\n	<br />\r\n	- Trong trường hợp thiết bị hỏng của qu&iacute; kh&aacute;ch kh&ocirc;ng thể sửa chữa được m&agrave; kh&ocirc;ng c&ograve;n mua được tr&ecirc;n thị trường th&igrave; ch&uacute;ng t&ocirc;i sẽ đổi cho qu&iacute; kh&aacute;ch thiết bị kh&aacute;c ho&agrave;n to&agrave;n tương đương với thiết bị hỏng nhưng ở t&igrave;nh trạng hoạt động tốt. Trường hợp qu&iacute; kh&aacute;ch chưa ưng &yacute; với thiết bị thay thế tương đương th&igrave; ch&uacute;ng t&ocirc;i sẽ nhập lại theo gi&aacute; thoả thuận giữa hai b&ecirc;n</p>\r\n', '2011-03-10 00:00:00', '2011-03-10 00:00:00', '0000-00-00 00:00:00', 0, 1),
(3, 0, 1, 'Hỗ trợ trực tuyến', '', '<div style="padding-left: 30px;">\r\n	<p>\r\n		<b>Ph&ograve;ng kỹ thuật</b></p>\r\n	<p style="padding-left: 30px;">\r\n		<a href="ymsgr:sendIM?quoccuong"><img border="0" src="http://opi.yahoo.com/online?u=quoccuong&amp;m=g&amp;t=2" vspace="3" /></a></p>\r\n	<p>\r\n		<b>Ph&ograve;ng kinh doanh</b></p>\r\n	<p style="padding-left: 30px;">\r\n		<a href="ymsgr:sendIM?quoccuong"><img border="0" src="http://opi.yahoo.com/online?u=quoccuong&amp;m=g&amp;t=2" vspace="3" /></a><br />\r\n		<a href="ymsgr:sendIM?quoccuong"><img border="0" src="http://opi.yahoo.com/online?u=quoccuong&amp;m=g&amp;t=2" vspace="3" /></a></p>\r\n</div>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(4, 195, 1, 'MacBook Pro 15 inch dùng chip Intel Core i5 và Core i7', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=637"><img src="http://vitinhphongvu.com/multidata/news/13933166MT1.jpg" style="width: 100px; height: 90px; border-width: 0px; border-style: solid; margin: 2px 5px; float: left;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Một điểm nổi bật kh&aacute;c của d&ograve;ng sản phẩm n&agrave;y l&agrave; ứng dụng c&ocirc;ng nghệ chuyển đổi đồ họa mới giữa card NVIDIA GeForce GT330M v&agrave; Intel HD Graphic.</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<div align="justify">\r\n	<strong><font color="#5f5f5f"><font size="3"><font face="Times">Một điểm nổi bật kh&aacute;c của d&ograve;ng sản phẩm n&agrave;y l&agrave; ứng dụng c&ocirc;ng nghệ chuyển đổi đồ họa mới giữa card NVIDIA GeForce GT330M v&agrave; Intel HD Graphic. </font></font></font></strong>\r\n	<p class="normal">\r\n		<font size="3"><font face="Times">Cả hai bộ vi xử l&yacute; Core i7 v&agrave; Core i5 đều ứng dụng c&ocirc;ng nghệ tăng tốc Turbo Boost, gi&uacute;p tăng hiệu suất m&aacute;y t&iacute;nh th&ecirc;m 20%. Nhờ đ&oacute;, hệ thống hoạt động nhanh hơn, đồng thời k&eacute;o d&agrave;i thời lượng pin bằng c&aacute;ch tự điều chỉnh xung nhịp của từng nh&acirc;n độc lập cho ph&ugrave; hợp nhu cầu xử l&yacute;. B&ecirc;n cạnh đ&oacute;, mạch điều khiển bộ nhớ t&iacute;ch hợp (integrated memory controller) cũng được Intel ứng dụng v&agrave;o chip, gi&uacute;p tốc độ trao đổi dữ liệu giữa nh&acirc;n v&agrave; bộ nhớ nhanh hơn hẳn khi c&aacute;c th&agrave;nh tố nằm t&aacute;ch biệt tr&ecirc;n bảng mạch.</font></font></p>\r\n	<p class="normal">\r\n		<font size="3"><font face="Times">Đặc biệt, chip Core i5 v&agrave; Core i7 c&ograve;n được ứng dụng c&ocirc;ng nghệ si&ecirc;u ph&acirc;n luồng (Hyper-Threading), cung cấp 2 luồng (thread) tr&ecirc;n mỗi nh&acirc;n, tức l&agrave; tăng gấp đ&ocirc;i số t&aacute;c vụ m&agrave; một bộ vi xử l&yacute; c&oacute; thể thực thi. N&oacute;i một c&aacute;ch đơn giản, chip 4 nh&acirc;n Core i7 c&oacute; thể chạy c&ugrave;ng một l&uacute;c 8 luồng (nhờ c&ocirc;ng nghệ Si&ecirc;u ph&acirc;n luồng) v&agrave; tăng hiệu suất l&ecirc;n th&ecirc;m 20% (nhờ c&ocirc;ng nghệ Turbo Boost). Chip 2 nh&acirc;n Core i5 cũng tương tự. Bởi vậy, bạn c&oacute; thể thoải m&aacute;i chơi game &ldquo;nặng&rdquo;, xem phim HD hay thậm ch&iacute; chạy 3Ds Max. </font></font></p>\r\n	<p class="normal">\r\n		<font size="3"><font face="Times"><img alt="align=baseline" border="0" hspace="0" src="http://vnexpress.net/Files/Subject/3B/A2/00/82/09mbp17aperture.jpg" /></font></font></p>\r\n	<div align="center">\r\n		<p align="left" class="Normal">\r\n			Với m&aacute;y t&iacute;nh t&iacute;ch hợp chip Core i5, bạn c&oacute; thể chuyển đổi định dạng ba đoạn phim c&oacute; độ d&agrave;i 10 ph&uacute;t để đăng tải l&ecirc;n YouTube trong v&ograve;ng 79 gi&acirc;y &ndash; nhanh gấp 3 lần so với chip Pentium Dual Core (gần 4 ph&uacute;t). Core i5 cũng c&oacute; thể chỉnh sửa ảnh nhanh gấp gần 2 lần so với Pentium Dual Core; chuyển đổi hơn 10 b&agrave;i h&aacute;t chỉ trong 5 ph&uacute;t v&agrave; ti&ecirc;u thụ &iacute;t điện năng hơn đ&aacute;ng kể so với những d&ograve;ng vi xử l&yacute; trước đ&oacute;. Ri&ecirc;ng Core i7 thậm ch&iacute; nhanh hơn gấp 4 lần Pentium Dual Core khi chạy thử nghiệm một số tr&ograve; chơi điện tử.</p>\r\n		<p align="left" class="Normal">\r\n			Nhờ ứng dụng c&ocirc;ng nghệ mới về xử l&yacute; đồ họa, sản phẩm cho chất lượng h&igrave;nh ảnh đẹp, đồng thời vẫn k&eacute;o d&agrave;i thời gian sử dụng pin. MacBook Pro 15&rdquo; c&ograve;n được t&iacute;ch hợp 2 chip đồ họa: NVIDIA GeForce GT 330M mới cho những xử l&yacute; đồ họa cao, Intel HD Graphics cho những xử l&yacute; thấp hơn v&agrave; được ứng dụng c&ocirc;ng nghệ tự động chuyển đổi đồ họa. C&ocirc;ng nghệ n&agrave;y của Apple sẽ x&aacute;c định y&ecirc;u cầu về h&igrave;nh ảnh của ứng dụng bạn đang mở, từ đ&oacute; thay đổi bộ vi xử l&yacute; h&igrave;nh ảnh nhằm mang lại hiệu suất cao đồng thời vẫn tiết kiệm năng lượng.</p>\r\n		<p align="left" class="Normal">\r\n			D&ograve;ng MacBook Pro 15&rdquo; kế thừa những t&iacute;nh năng độc đ&aacute;o truyền thống của sản phẩm m&aacute;y t&iacute;nh Apple. Thiết kế vỏ nh&ocirc;m unibody đem lại cho MacBook Pro sự chắc chắn nhưng cũng kh&ocirc;ng k&eacute;m phần thời trang. B&agrave;n di chuột đa chạm được chế tạo từ thủy tinh hỗ trợ di chuyển một c&aacute;ch trực quan hơn, gi&uacute;p bạn dễ d&agrave;ng duyệt văn bản hay trang web d&agrave;i v&agrave; truy cập c&aacute;c thư viện h&igrave;nh ảnh lớn. Hệ thống đ&egrave;n LED-backlist m&agrave;n h&igrave;nh s&aacute;ng, g&oacute;c hiển thị rộng v&agrave; dải m&agrave;u phong ph&uacute;. Một ưu điểm nữa của MacBook Pro l&agrave; sản phẩm rất &ldquo;green&rdquo; v&igrave; được sản xuất với c&aacute;c loại vật liệu c&oacute; thể t&aacute;i chế v&agrave; kh&ocirc;ng chứa c&aacute;c chất độc hại đối với m&ocirc;i trường.</p>\r\n		<p align="left" class="Normal">\r\n			C&ocirc;ng ty Ph&acirc;n Phối FPT sẽ tặng phiếu mua phụ kiện m&aacute;y t&iacute;nh trị gi&aacute; 960.000 đồng cho c&aacute;c bạn sinh vi&ecirc;n khi mua c&aacute;c sản phẩm m&aacute;y t&iacute;nh Apple ch&iacute;nh h&atilde;ng tại c&aacute;c đại l&yacute; ủy quyền của C&ocirc;ng ty từ 4 đến 19/9.</p>\r\n		<p align="left" class="Normal">\r\n			Để biết th&ecirc;m th&ocirc;ng tin chi tiết, vui l&ograve;ng truy cập website: <a class="Normal" href="http://istore.vn/">http://istore.vn/</a></p>\r\n		<p align="right" class="Normal">\r\n			(Nguồn: <em>C&ocirc;ng ty TNHH Ph&acirc;n Phối FPT</em>)</p>\r\n	</div>\r\n</div>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(5, 196, 1, 'Compaq Presario CQ42AX tiết kiệm năng lượng', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=669"><img src="http://vitinhphongvu.com/multidata/news/1368594compact5.jpg" style="width: 100px; height: 100px; border-width: 0px; border-style: solid; margin: 2px 5px; float: left;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Laptop n&agrave;y sử dụng chip AMD Phenom thế hệ 2 c&oacute; thể hoạt động mạnh mẽ với 3 hoặc 4 l&otilde;i ho&agrave;n chỉnh (4 l&otilde;i Intel chỉ c&oacute; ở i7-7xxM) nhưng mức ti&ecirc;u thụ năng lượng chỉ bằng Core i3 (35 Watts).</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	<b>Laptop n&agrave;y sử dụng chip AMD Phenom thế hệ 2 c&oacute; thể hoạt động mạnh mẽ với 3 hoặc 4 l&otilde;i ho&agrave;n chỉnh (4 l&otilde;i Intel chỉ c&oacute; ở i7-7xxM) nhưng mức ti&ecirc;u thụ năng lượng chỉ bằng Core i3 (35 Watts).</b></p>\r\n<p class="Normal">\r\n	Compaq Presario CQ42-223AX t&iacute;ch hợp c&ocirc;ng nghệ Vision Ultimate của AMD cho trải nghiệm giải tr&iacute; HD mượt m&agrave; với Card ATI Mobility Radeon HD 545v. M&aacute;y c&oacute; ổ cứng tốc độ cao (7.200 v&ograve;ng mỗi ph&uacute;t) v&agrave; dung lượng 320 GB gi&uacute;p người d&ugrave;ng c&oacute; thể giải tr&iacute; chất lượng si&ecirc;u tốc độ cũng như chia sẻ v&agrave; lưu trữ nhiều dữ liệu.</p>\r\n<p align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://vnexpress.net/Files/Subject/3b/a2/74/c4/compact5.jpg" /></p>\r\n<h1 align="center" class="Title">\r\n	<strong><font size="3">Cấu h&igrave;nh Compaq Presario CQ42-223AX </font></strong></h1>\r\n<p align="center" class="Normal">\r\n	<font color="#000000" size="2">Vi xử l&yacute;: AMD Phenom II X4 N930 Mobile processor (2,0 GHz, 2MB L2 Cache).</font></p>\r\n<p align="center" class="Normal">\r\n	<font color="#000000" size="2">Cấu h&igrave;nh: 2 GB DDR3, 320GB HDD 7200rpm, DVD&plusmn;RW Double Layer.</font></p>\r\n<p align="center" class="Normal">\r\n	<font color="#000000" size="2">M&agrave;n h&igrave;nh 14 inch HD LED BrightView. </font></p>\r\n<p align="center" class="Normal">\r\n	<font color="#000000" size="2">Đồ hoạ 512MB DDR3 ATI Mobility Radeon HD 545v graphics (Dedicated).</font></p>\r\n<p align="center" class="Normal">\r\n	<font color="#000000" size="2">Kết nối: Wireless 802.11b/g.</font></p>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(6, 196, 1, 'LCD Razor LED mỏng 12,9 mm', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=653"><img src="http://vitinhphongvu.com/multidata/news/14018614E943FW.jpg" style="width: 100px; height: 100px; border-width: 0px; border-style: solid; margin: 2px 5px; float: left;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Kh&ocirc;ng chỉ si&ecirc;u mỏng, AOC Razor LED c&ograve;n c&oacute; thể v&agrave;o gắn tường v&agrave; điều chỉnh độ nghi&ecirc;ng ph&ugrave; hợp với mọi g&oacute;c nh&igrave;n. Sản phẩm c&oacute; độ tương phản động l&ecirc;n tới 50.000.000:1.</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	<b>Kh&ocirc;ng chỉ si&ecirc;u mỏng, AOC Razor LED c&ograve;n c&oacute; thể v&agrave;o gắn tường v&agrave; điều chỉnh độ nghi&ecirc;ng ph&ugrave; hợp với mọi g&oacute;c nh&igrave;n. Sản phẩm c&oacute; độ tương phản động l&ecirc;n tới 50.000.000:1.</b></p>\r\n<p align="left" class="Normal">\r\n	AOC cho ra mắt m&agrave;n h&igrave;nh Razor LED 43ID mỏng nhất từ trước đến nay, với bề d&agrave;y chỉ 12,9 mm. Kh&ocirc;ng chỉ mạnh về thiết kế si&ecirc;u mỏng, ch&acirc;n đế của AOC Razor LED c&ograve;n c&oacute; khả năng gắn tường v&agrave; điều chỉnh độ nghi&ecirc;ng ph&ugrave; hợp với mọi g&oacute;c nh&igrave;n của bạn. Kiểu d&aacute;ng thanh mảnh, thời trang, AOC Razor LED gi&uacute;p kh&ocirc;ng gian l&agrave;m việc của bạn trở n&ecirc;n gọn g&agrave;ng v&agrave; ấn tượng hơn. AOC Razor LED ứng dụng tối đa hiệu quả của c&ocirc;ng nghệ LED mới nhất cho độ tương phản động l&ecirc;n đến 50.000.000:1.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="310" src="http://vnexpress.net/Files/Subject/3B/A2/3B/40/Hinh_1_400x310.jpg" width="400" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Razor LED e943Fw v&agrave; e2043F &ndash; Rực rỡ hơn với độ tương phản l&ecirc;n đến 50.000.000:1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Hai model mới nhất của Razor l&agrave; e943Fw (18,5 inch) v&agrave; e2043F (20 inch) c&oacute; thiết kế giống nhau. C&aacute;c ph&iacute;m điều khiển cảm ứng c&ugrave;ng với c&aacute;c biểu tượng đồ họa OSD l&agrave;m cho menu điều chỉnh dễ sử dụng ngay cả trong điều kiện ph&ograve;ng thiếu &aacute;nh s&aacute;ng. Đ&egrave;n nền LED kh&ocirc;ng chứa chất thủy ng&acirc;n tiết kiệm đến 50% năng lượng so với m&agrave;n h&igrave;nh CCFL truyền thống. Năng lượng ti&ecirc;u thụ tiếp tục giảm nhờ c&ocirc;ng nghệ e-Saver. Thử nghiệm cho thấy mức ti&ecirc;u thụ của E943Fw v&agrave; E2043F chỉ khoảng 21W cho điều kiện s&aacute;ng tối đa, điều n&agrave;y g&oacute;p phần tăng cao tuổi thọ m&agrave;n h&igrave;nh. M&agrave;n h&igrave;nh kh&aacute; mỏng nhưng AOC Razor 43ID được trang bị c&ocirc;ng nghệ mới n&ecirc;n rất m&aacute;t khi sử dụng. Sau khi sử dụng 2 giờ li&ecirc;n tục, nhiệt độ mặt sau của m&agrave;n h&igrave;nh chỉ khoảng 28 độ C.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="290" src="http://vnexpress.net/Files/Subject/3B/A2/3B/40/Hinh-2_400x290.jpg" width="400" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				M&agrave;n h&igrave;nh AOC Razor LED &ndash; Ấn tượng với độ mỏng chỉ 12.9mm.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	B&ecirc;n cạnh d&ograve;ng Razor LED, AOC c&ograve;n cho ra mắt m&agrave;n h&igrave;nh Luvia e2237Fwh (21,5 inch) sử dụng bộ cảm biến i-Care được d&ugrave;ng để tự động điều chỉnh độ s&aacute;ng của m&agrave;n h&igrave;nh t&ugrave;y theo &aacute;nh s&aacute;ng m&ocirc;i trường xung quanh. Đơn giản l&agrave; khi ngồi l&agrave;m việc m&agrave;n h&igrave;nh sẽ cảm ứng với &aacute;nh s&aacute;ng m&ocirc;i trường v&agrave; cho ph&eacute;p người d&ugrave;ng sử dụng với độ s&aacute;ng tốt nhất. Khi bạn rời b&agrave;n l&agrave;m việc, m&agrave;n h&igrave;nh sẽ tự động tối đi gi&uacute;p tiết kiệm tối đa điện năng ti&ecirc;u thụ.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="293" src="http://vnexpress.net/Files/Subject/3B/A2/3B/40/Hinh_3_400x293.jpg" width="400" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Luvia e2237Fwh với chức năng cảm biến cảm biến &aacute;nh s&aacute;ng i-Care độc đ&aacute;o.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Bộ ba AOC tương t&aacute;c tốt th&ocirc;ng qua chế độ hỗ trợ 14 ng&ocirc;n ngữ v&agrave; được trang bị đầy đủ cổng kết nối cho c&aacute;c thiết bị ngoại vi. Tần số qu&eacute;t nằm ở mức 60 Hz sản phẩm hiển thị độ ph&acirc;n giải cụ thể: e943Fw l&agrave; 1366x768, e2043F l&agrave; 1600x900 v&agrave; e2237Fwh l&agrave; 1920x1080.</p>\r\n<p align="right" class="Normal">\r\n	(Nguồn<em>: H&atilde;ng AOC Việt Nam)</em></p>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(7, 196, 1, 'Dell làm mới dòng Vostro V13 với nhiều cải tiến', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=651"><img src="http://vitinhphongvu.com/multidata/news/11914143464cf51a1c9970d_vostro-v130-overview1.jpg" style="border-width: 0px; border-style: solid; margin: 2px 5px; float: left; width: 100px; height: 70px;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Dell vừa qua đ&atilde; ch&iacute;nh thức giới thiệu d&ograve;ng laptop si&ecirc;u mỏng, gi&aacute; rẻ mới nhất của m&igrave;nh với t&ecirc;n gọi Vostro V130 thay thế cho V13 đ&atilde; ra mắt được 1 năm nay. Đ&acirc;y cũng ch&iacute;nh l&agrave; ch&uacute; laptop đầu ti&ecirc;n sử dụng c&ocirc;ng nghệ l&agrave;m m&aacute;t mới của Intel &quot;Hyperbaric Cooling&quot;. M&aacute;y sử dụng một quạt với nhiệm vụ l&agrave; h&uacute;t kh&ocirc;ng kh&iacute; từ b&ecirc;n ngo&agrave;i v&agrave;o để l&agrave;m m&aacute;t hệ thống, đặc biệt l&agrave; CPU. C&ocirc;ng nghệ mới n&agrave;y cho ph&eacute;p quạt chạy ở tốc độ thấp nhằm giảm thiệu tiếng ồn v&agrave; gi&uacute;p m&aacute;y chạy &ecirc;m hơn.</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	<b>Dell vừa qua đ&atilde; ch&iacute;nh thức giới thiệu d&ograve;ng laptop si&ecirc;u mỏng, gi&aacute; rẻ mới nhất của m&igrave;nh với t&ecirc;n gọi Vostro V130 thay thế cho V13 đ&atilde; ra mắt được 1 năm nay. Đ&acirc;y cũng ch&iacute;nh l&agrave; ch&uacute; laptop đầu ti&ecirc;n sử dụng c&ocirc;ng nghệ l&agrave;m m&aacute;t mới của Intel &quot;Hyperbaric Cooling&quot;. M&aacute;y sử dụng một quạt với nhiệm vụ l&agrave; h&uacute;t kh&ocirc;ng kh&iacute; từ b&ecirc;n ngo&agrave;i v&agrave;o để l&agrave;m m&aacute;t hệ thống, đặc biệt l&agrave; CPU. C&ocirc;ng nghệ mới n&agrave;y cho ph&eacute;p quạt chạy ở tốc độ thấp nhằm giảm thiệu tiếng ồn v&agrave; gi&uacute;p m&aacute;y chạy &ecirc;m hơn. </b></p>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a1c9970d_vostro-v130-overview1.jpg" /></div>\r\n<p>\r\n	<font color="#000000">Với thiết kế gần giống đ&agrave;n anh V13, vỏ m&aacute;y Vostro V130 được cấu tạo từ hợp kim magie v&agrave; khung nh&ocirc;m chắc chắn. Kiểu d&aacute;ng si&ecirc;u mỏng với điểm mỏng nhất l&agrave; 16.5 mm v&agrave; dầy nhất l&agrave; 19.8mm. Với pin 6 cell gắn liền th&acirc;n, khối lượng tổng l&agrave; 1,59kg.</font> Vostro V130 vẫn sử dụng m&agrave;n h&igrave;nh 13.3 nhưng xử dụng BXL mới Core i3 hay Core i5 tiết kiệm điện năng (CULV) của Intel. M&aacute;y c&oacute; ram 4GB v&agrave; ổ đĩa cứng 640GB, ngo&agrave;i ra c&ograve;n được bổ xung th&ecirc;m cổng kết nối HDMI, hai USB, eSATA v&agrave; cổng ra VGA.<br />\r\n	<br />\r\n	<font color="#000000">Dell Vostro V130&nbsp;cấu h&igrave;nh ti&ecirc;u chuẩn:</font></p>\r\n<br />\r\n<ul>\r\n	<li>\r\n		<font color="#000000">OS: Ubuntu 10.04</font></li>\r\n	<li>\r\n		<font color="#000000">BXL: Intel&reg; Celeron&trade; Processor ULV U3400 (2M Cache, 1.06GHz, 800 MHz FSB)</font></li>\r\n	<li>\r\n		<font color="#000000">RAM: 2.0GB, DDR3-1333MHz, 1 thanh</font></li>\r\n	<li>\r\n		<font color="#000000">HDD: 250GB 5400RPM</font></li>\r\n	<li>\r\n		<font color="#000000">M&agrave;n h&igrave;nh: 13.3 inch WLED (1366x768), Anti-Glare Mobile Intel&reg; Graphics Media Accelerator HD</font></li>\r\n	<li>\r\n		<font color="#000000">Kết nối: wifi 802.11n, bluetooth 3.0</font></li>\r\n	<li>\r\n		<font color="#000000">Webcame: 2.0MP k&egrave;m mic</font></li>\r\n	<li>\r\n		<font color="#000000">Pin gắn trong 6-cell 30WHr</font></li>\r\n</ul>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a249533f_vostrov130081000031500f00rd.jpg" /></div>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a2917e9a_vostrov1300810000300180b90rd.jpg" /></div>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a2102085_vostrov130081000030090l90rd.jpg" /><br />\r\n	<br />\r\n	&nbsp;</div>\r\n<p>\r\n	<font color="#000000"><i><b>Nguồn: <a href="http://www.engadget.com/2010/11/30/dell-vostro-v130-updated-with-more-ports-fancy-hyperbaric-coo/" rel="nofollow" target="_blank"><font color="#00528b">engadget</font></a></b></i></font></p>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(8, 0, 1, 'Công ty cổ phần thương mại dịch vụ Alphatek Computer', '', '<div style="padding-left: 30px;">\n	<div>\n		Địa chỉ: 357 L&ecirc; Hồng Ph&ograve;ng, P2, Q10</div>\n	<div>\n		ĐT: 38337980 - Fax: 38337982</div>\n<div>\n		Email: alphatek@hcmuns.edu.vn</div>\n</div>\n<h3>\n	Bản đồ đường đi</h3>\n<p>\n	<img alt="ban do" src="images/tin_tuc/dia_chi_cua_hang.png" /></p>\n', '2011-03-23 00:00:00', '2011-03-23 00:00:00', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_san_pham` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='chi_tiet_hoa_don';

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`ma_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`) VALUES
(1, '30', 3, 150000),
(2, '31', 4, 3650000),
(3, '32', 1, 150000),
(4, '33', 1, 300000),
(5, '34', 4, 950000),
(6, '35', 1, 150000),
(7, '36', 5, 150000),
(8, '37', 1, 450000),
(9, '38', 1, 150000),
(10, '39', 2, 500000),
(11, '40', 4, 150000),
(12, '41', 5, 6500000),
(13, '42', 3, 150000),
(14, '43', 5, 800000),
(15, '44', 5, 150000),
(16, '45', 4, 750000),
(17, '46', 3, 150000),
(18, '47', 5, 350000),
(19, '48', 1, 150000),
(20, '49', 5, 150000),
(21, '50', 3, 150000),
(22, '51', 1, 150000),
(23, '52', 2, 150000),
(24, '53', 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ngay_hoa_don` date NOT NULL,
  `tong_tien` double NOT NULL,
  `hinh_thuc_thanh_toan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_khach_hang`, `ngay_hoa_don`, `tong_tien`, `hinh_thuc_thanh_toan`, `ghi_chu`) VALUES
(1, 1, '2017-04-15', 400000, '1', 'Chưa Thanh Toán'),
(2, 2, '2017-04-17', 350000, '1', 'Chưa Thanh Toán'),
(3, 3, '2017-04-17', 1000000, '1', 'Chưa Thanh Toán'),
(4, 4, '2017-04-18', 500000, '1', 'Chưa Thanh Toán'),
(5, 5, '2017-04-19', 1000000, '1', 'Chưa Thanh Toán'),
(6, 6, '2017-04-20', 650000, '1', 'Chưa Thanh Toán'),
(7, 7, '2017-04-21', 1000000, '1', 'Chưa Thanh Toán'),
(8, 8, '2017-04-22', 350000, '1', 'Chưa Thanh Toán'),
(9, 9, '2017-04-23', 1000000, '1', 'Chưa Thanh Toán'),
(10, 10, '2017-04-24', 600000, '1', 'Chưa Thanh Toán'),
(11, 11, '2017-04-25', 1000000, '1', 'Chưa Thanh Toán'),
(12, 12, '2017-04-26', 1000000, '1', 'Chưa Thanh Toán'),
(13, 13, '2017-04-27', 400000, '1', 'Chưa Thanh Toán'),
(14, 14, '2017-04-25', 1000000, '1', 'Chưa Thanh Toán'),
(15, 15, '2017-05-29', 1000000, '1', 'Chưa Thanh Toán'),
(16, 16, '2017-04-30', 1000000, '1', 'Chưa Thanh Toán'),
(17, 17, '0000-00-00', 1000000, '1', 'Chưa Thanh Toán'),
(18, 18, '2017-04-05', 1000000, '1', 'Chưa Thanh Toán'),
(19, 19, '2017-04-06', 300000, '1', 'Chưa Thanh Toán'),
(20, 20, '2017-04-07', 1000000, '1', 'Chưa Thanh Toán'),
(21, 21, '2017-04-08', 1000000, '1', 'Chưa Thanh Toán'),
(22, 22, '2017-04-09', 700000, '1', 'Chưa Thanh Toán'),
(23, 23, '2017-04-10', 1000000, '1', 'Chưa Thanh Toán'),
(24, 24, '2017-04-11', 350000, '1', 'Chưa Thanh Toán'),
(25, 25, '2017-04-12', 1000000, '1', 'Chưa Thanh Toán'),
(26, 26, '2017-04-13', 1000000, '1', 'Chưa Thanh Toán'),
(27, 27, '2017-04-14', 101000, '1', 'Chưa Thanh Toán'),
(28, 28, '2017-04-15', 1000000, '1', 'Chưa Thanh Toán'),
(29, 29, '2017-04-16', 1000000, '1', 'Chưa Thanh Toán'),
(30, 30, '2017-04-17', 1000000, '1', 'Chưa Thanh Toán'),
(31, 31, '2017-04-18', 1030000, '1', 'Chưa Thanh Toán'),
(32, 32, '2017-04-19', 60000, '1', 'Chưa Thanh Toán'),
(33, 33, '2017-04-20', 1000000, '1', 'Chưa Thanh Toán'),
(34, 34, '2017-04-21', 1000000, '1', 'Chưa Thanh Toán'),
(35, 35, '2017-04-22', 700000, '1', 'Chưa Thanh Toán'),
(36, 36, '2017-04-23', 1000000, '1', 'Chưa Thanh Toán'),
(37, 37, '2017-04-24', 200000, '1', 'Chưa Thanh Toán'),
(38, 38, '2017-04-25', 1000000, '1', 'Chưa Thanh Toán'),
(39, 39, '2017-04-26', 1000000, '1', 'Chưa Thanh Toán'),
(40, 40, '2017-04-27', 100000, '1', 'Chưa Thanh Toán');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`, `password`) VALUES
(64, 'Phan Thai Huu', 0, '2017-04-19', '454 c/c Nguyen Kim', '65464984984651', '1234561', '123456'),
(4, 'Nguyễn Khắc Thiện', 1, '2017-04-21', '12bis Đường 3-2 quận 10', '8769128', 'abc@abc.com', '123456'),
(11, 'Nguyễn Thị Thu Hương', 1, '1987-01-02', '343 Nguyễn Văn Trỗi, P.4, Q. Phú Nhuận', '012345654487', 'thuhuong@acb.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Nguyễn Thị Thùy Linh', 1, '1986-05-09', '323 Lê Văn Sỹ Quận 3', '4564564564', 'thuy_linh@abc.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'Nguyễn Thị Thùy Lan', 1, '1986-05-09', '11 Lê Văn Sỹ Quận TB', '4564564564', 'Lan@abc.com', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'Nguyễn Văn Khắc', 0, '1989-02-25', 'Tân Thành 1 Quan Bấc Hoài Nhơn Bình Định', '983715783', 'khac@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'Nguyễn Ngọc Long', 0, '1982-02-26', 'Phòng GDDT huyện Ngân Sơn, Bắc Kạn', '902212829', 'long@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 'Đặng Bích Thuận', 0, '1983-02-27', 'Nguyễn Trãi, Ba ĐÌnh, Thanh Hóa', '902212829', 'Thuan@zeran.com', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'Đồng Hồng Sang', 0, '1982-02-28', '961 HẬU GIANG, P11, Q6', '1663774662', 'sang@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(21, 'Đỗ Thanh Hưng', 0, '1982-03-01', '1B Tô Tịch Hoàn Kiếm, HN', '90918306', 'hung@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'Nguyễn Thanh Thiên', 0, '1981-03-02', 'SN 312 khu B5, Long Biên. HN', '839743787', 'thien@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(23, 'Nguyễn Ngọc Cường', 0, '1982-03-03', 'P302, khu tập thể Quỳnh Mai,HN', '983715783', 'cuong@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Diệp Thị Thu Tâm', 1, '1982-03-04', 'P7 Q8', '902212829', 'tam@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(25, 'Thái Thị Thu Thảo', 1, '1967-03-05', 'AN THỚI, BÌNH THỦY, CẦN THƠ', '902212829', 'thuthao@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Mai Hoàng Chuyên', 1, '1984-03-06', 'Phố Cầu, xã Nam Hùng, Nam Trực, Nam Định', '1663774662', 'Hoang_chuyen@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(27, 'Hoàng Ngọc Đức', 0, '1982-03-07', 'Hoàng Mai_HN', '902383962', 'ngoc_duc@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(28, 'Nguyễn ánh Ngọc', 1, '1981-03-08', '277/16 Trường Chinh, Q.Tân Bình-TP HCM', '905509447', 'anh_ngoc@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(29, 'Bùi Thị Hương Giang', 1, '1982-03-09', '45A Phú Đức, Vĩnh Hoá, Nha Trang', '978701248', 'huong_giang@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(30, 'Hồ Ngọc Linh', 1, '1985-03-10', 'Quốc Oai HN', '914349368', 'ngoc_linh@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(31, 'Nguyễn Bá Phước', 0, '1982-03-11', 'Số 1 ngõ 20 Trần Phú Văn Quán Hà Đông, HN', '983058335', 'ba_phuoc@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(32, 'Nguyễn Thị Thúy Nga', 1, '1955-03-12', 'q.Bình Tân', '913300571', 'thuy_nga@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(33, 'Võ Thế Hùng', 1, '1982-02-24', '98 Lý Thái Tổ,BÌNH ĐỊNH', '978865595', 'the_hung@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(34, 'Lê Phong', 0, '1967-02-25', '241/9/23 Bến Vân Đồn P5, Q4, tp HCM', '975117174', 'le_phong@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(35, 'Nguyễn Văn Dũng', 0, '1982-02-26', '23B ấp 2 tổ An Nhựt Tân Tân Trụ, Long An', '937503386', 'van_dung@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(61, 'Nguyễn Văn Phùng Ngọc', 0, '1993-03-01', '434 Nguyễn Trọng Tuyển,p3', '0983664356', 'nguyen_ngoc@abc.com', 'e10adc3949ba59abbe56e057f20f883e'),
(37, 'Trần Thị N. Hương', 0, '1982-02-28', 'ấp hòa hiệp xã Long Hóa huyện Cần Giờ', '948683570', 'nhu_huong@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(38, 'Võ Thị Mỹ Xuân', 1, '1982-03-01', '580/6APHẠM VĂN CHÍ F8 Q6', '904396099', 'my_xuan@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(39, 'Trần Thanh Thủy', 1, '1987-03-02', 'TRƯỜNG CHÍNH TRỊ TRÀ VINH', '909885880', 'tran_thanh_thuy@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(40, 'Lê Đức Trí', 0, '1982-03-03', 'Q6 TPHCM', '905291270', 'le_duc_tri@abc.com', 'e10adc3949ba59abbe56e057f20f883e'),
(41, 'Lê Ngọc Hùng', 1, '1982-03-04', '114 Ký Con ( lầu 4) P Nguyễn Thái Bình Q1', '976325142', 'ngoc_hung@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(42, 'Bành Hán Khuê', 1, '1980-03-05', 'Tổ 23 Phuờng Lĩnh Nam, Hoàng Mai, HN', '972242769', 'han_khue@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(43, 'Nguyễn Văn Dũng', 0, '1982-03-06', '90 Hưng Phú Phường 8 Quận 8', '983116475', 'thanh_ha@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(44, 'Vũ Thị Thanh Hà', 0, '1982-03-07', 'K68/14TRẦN BÌNH TRỌNG, ĐÀ NẴNG', '90898715', 'thanh_ha@abc.com', 'e10adc3949ba59abbe56e057f20f883e'),
(45, 'Phan Công Tâm', 1, '1986-03-08', '47 Nguyễn Du, Gò Vấp, TP HCM', '909259701', 'pham_cong_tam@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(46, 'Đặng Trần Thông', 0, '1982-03-09', 'R23/1/8 cư xá P.Lâm A, P12 Q6 TPHCM', '909496695', 'dang_tran_thong@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(47, 'Du Tuấn Ninh', 0, '1984-03-10', 'Hà Đông, HN', '973119433', 'du_tuan_minh@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(48, 'Nguyễn Thanh Sa', 0, '1983-03-11', '54 Đinh Công Tráng, Ba Đình, Thanh Hoá', '908743009', 'thanh_sa@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(49, 'Lê Thanh Tuấn', 0, '1982-03-12', 'tổ 30, phường Hoàng Sơn', '919026825', 'thanh_tuan@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(50, 'Nguyễn Đức Thiện', 0, '1982-03-13', '26B, tổ 47, KV 7, Hưng Phú, Cái Răng, TP CT', '983058335', 'duc_thien@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(51, 'Lê Quyết Thắng', 0, '1982-03-14', 'xã Chí Bình,Châu Thành,Tây Ninh', '938148318', 'quyet_thang@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(52, 'Hồ Thị N.Quyên', 1, '1983-03-15', '38/5/8 Bình Giã, F8, Vũng Tàu', '436431110', 'ht_quyen@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(53, 'Nguyễn Thị Cẩm Vân', 1, '1982-03-26', 'Từ Liêm,Hn', '908446401', 'nt_cam_van@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(54, 'Dương Văn Triều', 1, '1972-03-17', 'Số 24 Phương Mai, HN', '1227419993', 'duong.vt@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(55, 'Nguyễn Phi Cường', 0, '1982-03-18', '108 Tạ Quang Bửu, F3, Q8', '989950992', 'nguyen_phi_cuong@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(56, 'Hoàng Thị Thu Hiền', 1, '1982-03-19', '468 Nguyễn An Ninh, Vũng Tàu', '932733458', 'thu_hien@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(57, 'Lê Ngọc Anh Thư', 1, '1982-03-20', '88/7 KV BÌNH PHÓ A, LONH TUYỀN, BÌNH THỦY, CT', '972080212', 'le_ngoc_anh_thu@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(58, 'Tạ Thị Hoàng Yến', 1, '1977-03-21', '176/3/2 Hậu Giang-P6-Q6-TP HCM', '373858468', 'ta_thi_hoang_yen@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(59, 'Phạm Thị Ngọc Thy', 1, '1987-03-22', '72/18 đường 4 KP3 p.Tam Phú, Thủ Đức, TPHCM', '948076382', 'pham_thi_ngoc_thy@zean.com', 'e10adc3949ba59abbe56e057f20f883e'),
(63, 'Cả Lú', 1, '2017-04-28', '454 c/c Nguyen Kim', '0915654545', 'ptnhung@hcmuns.edu.vn', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `loai_bai_viet`
--

CREATE TABLE `loai_bai_viet` (
  `ma_loai_bai_viet` int(11) NOT NULL,
  `ten_loai_bai_viet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `ma_loai_cha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_bai_viet`
--

INSERT INTO `loai_bai_viet` (`ma_loai_bai_viet`, `ten_loai_bai_viet`, `mo_ta`, `ma_loai_cha`) VALUES
(194, 'Tin khuyến mãi', '', 0),
(195, 'Tin công nghệ', '', 194),
(196, 'Sản phẩm mới', '', 194);

-- --------------------------------------------------------

--
-- Table structure for table `loai_mat_hang`
--

CREATE TABLE `loai_mat_hang` (
  `ma_loai_mat_hang` int(11) NOT NULL,
  `ten_loai_mat_hang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_mat_hang`
--

INSERT INTO `loai_mat_hang` (`ma_loai_mat_hang`, `ten_loai_mat_hang`) VALUES
(1, 'Thời trang Nam'),
(2, 'Thời trang Nữ'),
(3, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ten_loai_nguoi_dung` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`ma_loai_nguoi_dung`, `ten_loai_nguoi_dung`) VALUES
(1, 'Quản trị'),
(2, 'Khách hàng'),
(3, 'Nhân viên'),
(4, 'Kỹ thuật'),
(5, 'Kế toán'),
(6, 'Trưởng phòng'),
(7, 'Phó phòng'),
(8, 'Giám đốc'),
(9, 'Phó giám đốc');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai_san_pham` int(11) NOT NULL,
  `ma_loai_mat_hang` int(11) NOT NULL,
  `ten_loai_san_pham` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai_san_pham`, `ma_loai_mat_hang`, `ten_loai_san_pham`, `mo_ta`) VALUES
(1, 1, 'Áo sơ mi nam', NULL),
(2, 1, 'Áo thun nam', NULL),
(3, 1, 'Quần dài nam', NULL),
(4, 1, 'Quần short nam', NULL),
(5, 2, 'Áo sơ mi nữ', NULL),
(6, 2, 'Áo thun nữ', NULL),
(7, 2, 'Quần dài nữ', NULL),
(8, 2, 'Quần short nữ', NULL),
(9, 2, 'Đầm', NULL),
(10, 2, 'Váy', NULL),
(11, 1, 'Giày nam', NULL),
(12, 1, 'Dép nam', NULL),
(13, 1, 'Sneaker nam', NULL),
(14, 2, 'Giày nữ', NULL),
(15, 2, 'Dép nữ', NULL),
(16, 2, 'Sneaker nữ', NULL),
(17, 3, 'Ví', NULL),
(18, 3, 'Túi xách', NULL),
(19, 3, 'Mắt kính', NULL),
(20, 3, 'Đồng hồ đeo tay', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten_dang_nhap` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mat_khau` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ngay_dang_ky` date DEFAULT NULL,
  `ngay_dang_nhap_cuoi` date DEFAULT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `ma_loai_nguoi_dung`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`, `ngay_dang_nhap_cuoi`, `active`) VALUES
(1, 1, 'Khuất Thùy Phương', 'phuong', 'e10adc3949ba59abbe56e057f20f883e', 'ktphuong@hcmuns.edu.vn', '2007-11-01', NULL, 0),
(2, 2, 'Đỗ Lâm Thiên', 'thien', 'e10adc3949ba59abbe56e057f20f883e', 'dlthien@hcmuns.edu.vn', '2007-11-02', NULL, 1),
(3, 3, 'Trương Hữu Quý', 'quy', 'e10adc3949ba59abbe56e057f20f883e', 'thquy@hcmuns.edu.vn', '2007-11-03', NULL, 0),
(4, 4, 'Nguyễn Kiến Thy', 'thy', 'e10adc3949ba59abbe56e057f20f883e', 'nkthy@hcmuns.edu.vn', '2007-11-04', NULL, 0),
(5, 3, 'Phạm Thị Nhung', 'nhung', 'e10adc3949ba59abbe56e057f20f883e', 'ptnhung@hcmuns.edu.vn', '2007-11-02', NULL, 0),
(6, 4, 'Lâm Thị Thu Hồng', 'hong', 'e10adc3949ba59abbe56e057f20f883e', 'ltthong@hcmuns.edu.vn', '2007-11-06', NULL, 0),
(7, 3, 'Nguyễn Tiến Dũng', 'dung', 'e10adc3949ba59abbe56e057f20f883e', 'ntd@hcmuns.edu.vn', '2007-11-02', NULL, 1),
(8, 4, 'Nguyễn Hữu Thiện', 'huuthien', 'e10adc3949ba59abbe56e057f20f883e', 'nhthien@hcmuns.edu.vn', '2007-11-04', NULL, 0),
(9, 3, 'Nguyễn Thị Minh Hằng', 'hang', 'e10adc3949ba59abbe56e057f20f883e', 'ntmhang@hcmuns.edu.vn', '2007-11-05', NULL, 0),
(10, 7, 'Nguyễn Thị Minh Trang', 'trang', 'e10adc3949ba59abbe56e057f20f883e', 'ntmtrang@hcmuns.edu.vn', '2007-11-06', NULL, 0),
(11, 4, 'Nguyễn Thị Phương Lan', 'lan', 'e10adc3949ba59abbe56e057f20f883e', 'ntplan@hcmuns.edu.vn', '2007-11-02', NULL, 0),
(12, 4, 'Nguyễn Đăng Thái Bình', 'binh', 'e10adc3949ba59abbe56e057f20f883e', 'ndtbinh@hcmuns.edu.vn', '2007-11-09', NULL, 0),
(13, 8, 'Khách', 'khach', 'e10adc3949ba59abbe56e057f20f883e', 'guest@abc.com', '2007-11-01', NULL, 0),
(15, 7, 'Mai Lê Toàn', 'lm_toan', 'e10adc3949ba59abbe56e057f20f883e', 'mltoan@yahoo.com', '2007-11-08', '0000-00-00', 0),
(16, 8, 'quốc cường', 'quoccuong', 'e10adc3949ba59abbe56e057f20f883e', 'cqcuong.php@gmail.com', '2011-01-07', NULL, 1),
(17, 8, 'quốc cường', 'quoccuong', 'e10adc3949ba59abbe56e057f20f883e', 'cqcuong.php@gmail.com', '2011-01-07', NULL, 1),
(18, 0, 'Administrator', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@abc.com', '2017-03-01', '2017-03-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` varchar(8) NOT NULL,
  `ten_san_pham` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai_san_pham` int(11) NOT NULL,
  `mo_ta_tom_tat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta_chi_tiet` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `don_gia` int(11) NOT NULL DEFAULT '0',
  `dvt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Sản phẩm',
  `hinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `san_pham_moi` tinyint(4) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT '0',
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai_san_pham`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `dvt`, `hinh`, `san_pham_moi`, `so_luot_xem`, `ngay_tao`) VALUES
('MA001', 'Quần Áo ABC', 0, '', '', 200000, 'Sản phẩm', 'img_avatar2.jpg.jpg', 1, 1, '2017-04-22'),
('naas0005', 'Áo Sơ Mi Màu Vàng', 0, '<p>abc</p>', '<p>abc</p>', 380000, 'Sản phẩm', '1111.jpg', 1, 1, '2017-04-22'),
('naas0006', 'Sơ mi ca rô đỏ trắng vàng', 0, '<p>abc</p>', '<p>abc</p>', 310000, 'Sản phẩm', '1111.jpg', 1, 1, '2017-04-22'),
('naas0007', 'Sơ mi ca rô abc', 0, '<p>abc</p>', '<p>abc</p>', 310000, 'Sản phẩm', '1111.jpg', 1, 1, '2017-04-22'),
('naas0009', 'Sơ mi đen sợi tre', 1, 'Tay ngắn, màu đen, sợi tre', 'Sơ mi đen lịch lãm cùng với chất liệu sợi tre tương tự như lụa', 340000, 'Sản phẩm', 'naas0009.jpg', 0, 66, '2016-12-12'),
('naas0010', 'Sơ mi trắng, sợi tre', 1, 'Tay ngắn, màu trắng', 'Áo sơ mi trắng ngắn tay với chất liệu sợi tre thiên nhiên, hút', 230000, 'Sản phẩm', 'naas0010.jpg', 0, 10, '2016-12-12'),
('naas1001', 'Sơ mi xanh đen họa tiết', 1, 'Tay dài, xanh đen, họa tiết', 'Chất liệu cotton sẽ tạo cảm giác thoải mái cho người mặc. Form', 200000, 'Sản phẩm', 'naas1001.jpg', 0, 60, '2016-12-12'),
('naas1002', 'Sơ mi xanh tím than họa tiết', 1, 'Tay dài, xanh tím, họa tiết', 'Chất liệu cotton sẽ tạo cảm giác thoải mái cho người mặc. Form', 200000, 'Sản phẩm', 'naas1002.jpg', 0, 60, '2016-12-12'),
('naas1003', 'Sơ mi tím nhạt', 1, 'Tay dài, tím nhạt, vải sợi sồi', 'Chất liệu sợi sồi mới lạ tạo hút ẩm cực tốt, chống nhăn giúp b', 200000, 'Sản phẩm', 'naas1003.jpg', 0, 60, '2016-12-12'),
('naas1004', 'Sơ mi trắng, sợi tre', 1, 'Tay dài, màu trắng', 'Chất liệu sợi tre, an toàn cho da, mềm mịn, thoáng mát, không', 230000, 'Sản phẩm', 'naas1004.jpg', 0, 60, '2016-12-12'),
('naas1005', 'Sơ mi trơn, xanh nước biển', 1, 'Tay dài, xanh nước biển', 'Chất liệu kate thoáng mát, hạn chế tối đa việc nhăn nhàu trong', 230000, 'Sản phẩm', 'naas1005.jpg', 0, 89, '2016-12-12'),
('naas1006', 'Sơ mi trắng trơn', 1, 'Tay dài, màu trắng trơn', 'Chất liệu kate thoáng mát, hạn chế tối đa việc nhăn nhàu trong', 230000, 'Sản phẩm', 'naas1006.jpg', 0, 89, '2016-12-12'),
('naas1007', 'Sơ mi trắng kẻ sợi', 1, 'Tay dài, màu trắng, sợi tre', 'Với chất liệu sợi tre hút ẩm cực tốt, thấm mồ hôi, dễ giặt ủi.', 290000, 'Sản phẩm', 'naas1007.jpg', 0, 89, '2016-12-12'),
('naas1008', 'Sơ mi sợi sồi, xanh da trời', 1, 'Tay dài, xanh da trời, sợi sồi', 'Được làm bằng bột gỗ sồi có đặc tính mềm mại, thoáng mát, mịn', 290000, 'Sản phẩm', 'naas1008.jpg', 0, 89, '2016-12-12'),
('naas1009', 'Sơ mi đỏ mận, họa tiết', 1, 'Tay dài, đỏ mận, họa tiết', 'Áo sơ mi tay dài với chất liệu kate, mềm mại thoáng mát, dễ gi', 290000, 'Sản phẩm', 'naas1009.jpg', 0, 72, '2016-12-12'),
('naas1010', 'Sơ mi màu be', 1, 'Tay dài, màu be', 'Sơ mi màu be, chất liệu 100% cotton tự nhiên, hút ẩm, thấm mồ', 380000, 'Sản phẩm', 'naas1010.jpg', 0, 72, '2016-12-12'),
('naat0001', 'Áo Polo họa tiết ngực', 2, 'Áo thun, tay ngắn họa tiết ngực', 'Áo thun Polo chất liệu cotton kết hợp vải dệt kim. Co dãn, tho', 230000, 'Sản phẩm', 'naat0001.jpg', 0, 10, '2016-12-12'),
('naat0002', 'Áo Polo sọc ngang, trắng đen', 2, 'Áo ngắn tay, sọc ngang trắng đen', 'Áo thun Polo chất liệu cotton kết hợp vải dệt kim. Co dãn, tho', 230000, 'Sản phẩm', 'naat0002.jpg', 0, 10, '2016-12-12'),
('naat0003', 'Áo Polo đỏ viền cổ', 2, 'Áo thun ngắn tay, màu đỏ, viền cổ', 'Áo viền cổ kết hợp với màu đỏ tạo cho người mặc phong cách trẻ', 200000, 'Sản phẩm', 'naat0003.jpg', 0, 10, '2016-12-12'),
('naat0004', 'Áo thun đen cổ tròn', 2, 'Áo ngắn tay, cổ tròn, màu đen', 'Áo thun ngắn tay chất liệu cotton thoáng mát, mềm mịn, thấm hú', 200000, 'Sản phẩm', 'naat0004.jpg', 0, 10, '2016-12-12'),
('naat0005', 'Áo thun đỏ cổ tim', 2, 'Áo ngắn tay, cổ tim, màu đỏ', 'Áo thun ngắn tay chất liệu cotton thoáng mát, mềm mịn, thấm hú', 200000, 'Sản phẩm', 'naat0005.jpg', 0, 10, '2016-12-12'),
('naat0006', 'Áo thun trắng sữa', 2, 'Áo Polo trắng sữa, cổ có cúc', 'Áo thun ngắn tay, có cúc ở cổ tạo cảm giác thư sinh. Chất liệu', 200000, 'Sản phẩm', 'naat0006.jpg', 0, 87, '2016-12-12'),
('naat0007', 'Áo thun cổ bẻ', 2, 'Áo cổ bẻ, đỏ đô', 'Áo thun cổ bẻ màu đỏ đô, thiết kế đơn giản, tạo cảm giác thoải', 270000, 'Sản phẩm', 'naat0007.jpg', 0, 87, '2016-12-12'),
('naat0008', 'Áo thun xanh lam', 2, 'Áo thun họa tiết sọc ngang nhỏ', 'Áo thun sọc ngang nhỏ, xanh lam kem, cổ xanh trắng. Chất liệu', 270000, 'Sản phẩm', 'naat0008.jpg', 0, 87, '2016-12-12'),
('naat0009', 'Áo thun xanh lam trơn', 2, 'Áo thun xanh lam, không họa tiết', 'Áo thun ngắn tay, màu xanh lam trơn, cổ bẻ với thiết kế đơn gi', 270000, 'Sản phẩm', 'naat0009.jpg', 0, 87, '2016-12-12'),
('naat0010', 'Áo thun trắng cổ tròn', 2, 'Áo cổ tròn, màu trắng', 'Áo thun cổ tròn, ngắn tay, màu trắng thiết kết đơn giản. Chất', 330000, 'Sản phẩm', 'naat0010.jpg', 0, 87, '2016-12-12'),
('nade0001', 'Dép nam GIAVI ', 12, 'Dép nam GIAVI năng động 365', 'Chất liệu cao su và da PU bền đẹp, phần tiếp xúc với lòng bàn', 250000, 'Sản phẩm', 'nade0001.jpg', 0, 81, '2016-12-12'),
('nade0002', 'Dép kẹp nam GIAVI', 12, 'Dép kẹp nam GIAVI đơn giản', 'Chất liệu cao su và dù bền đẹp, phần tiếp xúc với lòng bàn châ', 300000, 'Sản phẩm', 'nade0002.jpg', 0, 81, '2016-12-12'),
('nade0003', 'Dép kẹp nam da bò', 12, 'Dép kẹp nam da bò, màu trắng', 'Dép làm bằng chất liệu da bò bền đẹp, phần tiếp xúc với lòng b', 300000, 'Sản phẩm', 'nade0003.jpg', 0, 81, '2016-12-12'),
('nade0004', 'Dép sandal', 12, 'Dép sandal nam cá tính', 'Chất liệu cao su + dù bền đẹp cho bạn an tâm sử dụng. Thiết kế', 300000, 'Sản phẩm', 'nade0004.jpg', 0, 81, '2016-12-12'),
('nade0005', 'Dép nam GIAVI ', 12, 'Dép nam GIAVI đế cao sành điệu', ' Chất liệu da bò thật 100% bền đẹp, mang êm chân, tạo cảm giác', 300000, 'Sản phẩm', 'nade0005.jpg', 0, 81, '2016-12-12'),
('nagi0001', 'Giày Boot nam', 11, 'Giày Boot nam cao cổ phối màu cá tính', 'Chất liệu da pu mềm mại tạo cho bạn cảm giác êm chân, thoải má', 310000, 'Sản phẩm', 'nagi0001.jpg', 0, 88, '2016-12-12'),
('nagi0002', 'Giày nam GIAVI', 11, 'Giày nam GIAVI thời trang năng động ', 'Chất liệu da bò thật bền đẹp theo thời gian, bên trong được th', 310000, 'Sản phẩm', 'nagi0002.jpg', 0, 88, '2016-12-12'),
('nagi0003', 'Giày Slip-on ', 11, 'Giày Slip-on Nam QuickFree Lightly ', 'Chất liệu da bò mềm mại tự nhiên, bền chắc, tạo sự thoải mái v', 310000, 'Sản phẩm', 'nagi0003.jpg', 0, 88, '2016-12-12'),
('nagi0004', 'Giày Cột Dây', 11, 'Giày Cột Dây Unisex QuickFree PAN ', 'Chất liệu vải canvas Oz20 sang trọng tự nhiên, bền chắc, tạo s', 250000, 'Sản phẩm', 'nagi0004.jpg', 0, 81, '2016-12-12'),
('nagi0005', 'Giày sandal', 11, 'Giày sandal nam năng động', 'Chất liệu đế giày được làm bằng cao su tổng hợp bền chắc với t', 250000, 'Sản phẩm', 'nagi0005.jpg', 0, 81, '2016-12-12'),
('nakk1001', 'Quần kaki đen', 3, 'Quần đen, sợi tổng hợp', 'Quần KaKi đen với chất liệu sợi tổng hợp, siêu bền, ít nhăn, d', 210000, 'Sản phẩm', 'nakk1001.jpg', 0, 44, '2016-12-12'),
('nakk1002', 'Quần kaki ghi xám', 3, 'Quần ghi xám, sợi tổng hợp', 'Quần KaKi xám với chất liệu sợi tổng hợp, siêu bền, ít nhăn, d', 210000, 'Sản phẩm', 'nakk1002.jpg', 0, 44, '2016-12-12'),
('nakk1003', 'Quần kaki trắng sữa', 3, 'Quần màu trắng sữa, sợi tổng hợp', 'Quần KaKi trắng sữa với chất liệu sợi tổng hợp, siêu bền, ít n', 210000, 'Sản phẩm', 'nakk1003.jpg', 0, 44, '2016-12-12'),
('nakk1004', 'Quần kaki vàng nhạt', 3, 'Quần vàng nhạt, chất liệu cao cấp', 'Quần kaki vàng nhạt, chất liệu trẻ trung, năng động.', 200000, 'Sản phẩm', 'nakk1004.jpg', 0, 44, '2016-12-12'),
('nakk1005', 'Quần kaki đỏ', 3, 'Quần đỏ, thiết kế đơn giản', 'Quần KaKi màu đỏ cùng với thiết kế ống côn trẻ trung năng động', 200000, 'Sản phẩm', 'nakk1005.jpg', 0, 56, '2016-12-12'),
('nakk1006', 'Quần kaki xanh ngọc', 3, 'Quần xanh ngọc, thời trang', 'Quần KaKi xanh ngọc, thiết kể trẻ trung năng động, chất liệu s', 200000, 'Sản phẩm', 'nakk1006.jpg', 0, 56, '2016-12-12'),
('namk0001', 'Mắt kính nam gọng tròn', 19, 'Mắt kính, gọng tròn, thời trang', 'Chất liệu nhựa và kim loại cao cấp, đẹp, sáng bóng, bền màu, v', 690000, 'Sản phẩm', 'namk0001.jpg', 0, 19, '2016-12-12'),
('namk0002', 'Mắt kính Unisex cách điệu Nam', 19, 'Mắt kính cách điệu, phong cách Hàn Qu', 'Chất liệu tròng Polycarbonate có khả năng chống tia cực tím, t', 900000, 'Sản phẩm', 'namk0002.jpg', 0, 19, '2016-12-12'),
('namk0003', 'Mắt kính nam thời trang', 19, 'Mắt kính nam thời trang, phong cách H', 'Chất liệu tròng Polycarbonate có khả năng chống tia cực tím, t', 900000, 'Sản phẩm', 'namk0003.jpg', 0, 19, '2016-12-12'),
('namk0004', 'Kính mát nam Jubilant', 19, 'Kính mát Jubilant unisex J45073M ', 'Chất liệu tròng Polycarbonate có khả năng chống tia cực tím, t', 900000, 'Sản phẩm', 'namk0004.jpg', 0, 19, '2016-12-12'),
('naqj1001', 'Quần Jean xám', 3, 'Jean xám, ống côn', 'Chất liệu jean trẻ trung năng động, ống hơi côn, màu xám hợp t', 330000, 'Sản phẩm', 'naqj1001.jpg', 0, 87, '2016-12-12'),
('naqj1002', 'Quần Jean Xanh', 3, 'Jean xanh, ống côn', 'Chất liệu jean trẻ trung năng động, ống hơi côn, màu xanh cổ đ', 330000, 'Sản phẩm', 'naqj1002.jpg', 0, 87, '2016-12-12'),
('naqj1003', 'Quần Jean Xanh Đậm', 3, 'Jean xanh đậm ống côn', 'Chất liệu jean trẻ trung năng động, ống hơi côn, màu xanh đậm', 390000, 'Sản phẩm', 'naqj1003.jpg', 0, 87, '2016-12-12'),
('naqs0001', 'Short KaKi trắng sữa', 4, 'Quần short kaki trắng sữa', 'Chấ liệu kaki kết hợp với thiết kế đơn giản tạo cảm giác trẻ t', 250000, 'Sản phẩm', 'naqs0001.jpg', 0, 56, '2016-12-12'),
('naqs0002', 'Short KaKi xanh tím', 4, 'Quần short kaki , xanh tím', 'Quần short nam màu xanh tím, bền màu, mặc mát, giữ màu tốt.', 250000, 'Sản phẩm', 'naqs0002.jpg', 0, 56, '2016-12-12'),
('naqs0003', 'Short KaKi đỏ', 4, 'Quần short kaki, đỏ', 'Quần short nam màu đỏ, bền màu, mặc mát, giữ màu tốt.', 250000, 'Sản phẩm', 'naqs0003.jpg', 0, 56, '2016-12-12'),
('naqs0004', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 270000, 'Sản phẩm', 'naqs0004.jpg', 0, 10, '2016-12-12'),
('naqs0005', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 270000, 'Sản phẩm', 'naqs0005.jpg', 0, 10, '2016-12-12'),
('naqs0006', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 270000, 'Sản phẩm', 'naqs0006.jpg', 0, 10, '2016-12-12'),
('naqs0007', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 270000, 'Sản phẩm', 'naqs0007.jpg', 0, 10, '2016-12-12'),
('naqs0008', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 255000, 'Sản phẩm', 'naqs0008.jpg', 0, 73, '2016-12-12'),
('naqs0009', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 255000, 'Sản phẩm', 'naqs0009.jpg', 0, 73, '2016-12-12'),
('naqs0010', 'Short KaKi xanh đá', 4, 'Quần short kaki, xanh đá', 'Quần short nam màu xanh đá, bền màu, mặc mát, giữ màu tốt.', 255000, 'Sản phẩm', 'naqs0010.jpg', 0, 73, '2016-12-12'),
('naqt1001', 'Quần tây kẻ ô vuông', 3, 'Quần tây ông suông, kẻ ô vuông', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 390000, 'Sản phẩm', 'naqt1001.jpg', 0, 87, '2016-12-12'),
('naqt1002', 'Quần tây xám trơn', 3, 'Quần tây ống suông, xám trơn', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 390000, 'Sản phẩm', 'naqt1002.jpg', 0, 87, '2016-12-12'),
('naqt1003', 'Quần tây xanh kẻ ô nhỏ', 3, 'Quần tây ống đứng, xanh', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 390000, 'Sản phẩm', 'naqt1003.jpg', 0, 10, '2016-12-12'),
('naqt1004', 'Quần tây ca rô', 3, 'Quần tây ca rô xanh đen', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 350000, 'Sản phẩm', 'naqt1004.jpg', 0, 38, '2016-12-12'),
('naqt1005', 'Quầy tây đen', 3, 'Quần tây đen vân sần', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 350000, 'Sản phẩm', 'naqt1005.jpg', 0, 38, '2016-12-12'),
('naqt1006', 'Quần tây màu xám ghi', 3, 'Quần tây ống suông, xám ghi', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 350000, 'Sản phẩm', 'naqt1006.jpg', 0, 38, '2016-12-12'),
('naqt1007', 'Quần tây màu ghi sáng', 3, 'Quần tây ống suông, xám ghi sáng', 'Chất liệu tuýt xi cao cấp, form dáng trẻ trung, công nghệ chiế', 220000, 'Sản phẩm', 'naqt1007.jpg', 0, 9, '2016-12-12'),
('naqt1008', 'Quần tây đen hạt gạo', 3, 'Quần tây đen hạt gạp, óng ánh', 'Quần tây đen hạt gạo, óng ánh, chất liệu tuytsy len. Thấm hút', 220000, 'Sản phẩm', 'naqt1008.jpg', 0, 9, '2016-12-12'),
('naqt1009', 'Quần tây đen kẻ ngang', 3, 'Quần tây đen, sọc ngang chìm', 'Quần tây đen kẻ ngang với chất liệu tuytsy len thấm hút ẩm cực', 220000, 'Sản phẩm', 'naqt1009.jpg', 0, 9, '2016-12-12'),
('naqt1010', 'Quần tây xanh Navy', 3, 'Quần tây màu xanh Navy', 'Quần được may với chất liệu tuytsy cao cấp, tạo dáng, hợp thời', 210000, 'Sản phẩm', 'naqt1010.jpg', 0, 44, '2016-12-12'),
('nask0001', 'Giày Sneakers Nam', 13, 'Giày Sneakers Nam QuickFree Courtesy', 'Chất liệu da lộn và vải mềm mại tự nhiên, bền chắc, đế giày vớ', 350000, 'Sản phẩm', 'nask0001.jpg', 0, 81, '2016-12-12'),
('nask0002', 'Giày Sneakers Nam năng động', 13, 'Giày Sneake E-Shoe', 'Chất liệu da pu bền đẹp, chắc chắn khi mang. Thiết kế chống tr', 350000, 'Sản phẩm', 'nask0002.jpg', 0, 26, '2016-12-12'),
('nask0003', 'Gìay Sneaker V-Sport', 13, 'Giày Sneaker V-Sport màu đỏ năng động', 'Chất liệu vải ngoại nhập cao cấp. Thiết kế giày dạng cột dây,', 350000, 'Sản phẩm', 'nask0003.jpg', 0, 26, '2016-12-12'),
('nask0004', 'Giày Sneaker dán', 13, 'Giày Sneaker dán chéo, màu xám', 'Chất liệu vải canvas ngoại nhập cao cấp. Thiết kế giày dạng xỏ', 350000, 'Sản phẩm', 'nask0004.jpg', 0, 26, '2016-12-12'),
('nask0005', 'Giày QuickFree', 13, 'Giày QuickFree - Classic Leather Pref', 'Chất liệu da bò mềm mại, chắc chắn. Thiết kế kiểu giày cột giâ', 350000, 'Sản phẩm', 'nask0005.jpg', 0, 26, '2016-12-12'),
('nuas0001', 'Sơ mi nữ, tay ngắn', 5, 'Áo ngắn tay, điệu đà', 'Item này không chỉ giúp người mặc trở nên thanh lịch, trang nh', 260000, 'Sản phẩm', 'nuas0001.jpg', 0, 91, '2016-12-12'),
('nuas0002', 'Sơ mi nữ, cổ trụ', 5, 'Áo ngắn tay, cổ trụ', 'Áo sơ mi nữ ngắn tay cổ trụ, cùng thiết kế đơn giản trang nhã', 260000, 'Sản phẩm', 'nuas0002.jpg', 0, 91, '2016-12-12'),
('nuas0003', 'Sơ mi nữ, cổ tròn', 5, 'Áo tay lửng, cổ tròn', 'Áo sơ mĩ nữ tay lửng với màu hồng pastel dịu dàng với điểm nhấ', 260000, 'Sản phẩm', 'nuas0003.jpg', 0, 91, '2016-12-12'),
('nuas0004', 'Sơ mĩ nữ, tay lửng, cổ đính đá', 5, 'Áo tay lửng, cổ đính đá', 'Áo màu đen với cổ đính đá tạo đường nét tinh tế, sang trọng. V', 255000, 'Sản phẩm', 'nuas0004.jpg', 0, 91, '2016-12-12'),
('nuas0005', 'Sơ mi nữ, tay lỡ', 5, 'Áo tay lỡ, cổ nơ', 'Áo sơ mi dành cho các bạn nữ thích tay lỡ điệu đà, cách điệu p', 255000, 'Sản phẩm', 'nuas0005.jpg', 0, 22, '2016-12-12'),
('nuas0006', 'Sơ mi nữ, cộc tay', 5, 'Áo cộc tay, cổ đức', 'Mẫu áo cổ đức giản dị mà tinh tế, rất dễ mix đồ kết hợp với ch', 255000, 'Sản phẩm', 'nuas0006.jpg', 0, 22, '2016-12-12'),
('nuas0007', 'Sơ mi voan, cổ chữ V', 5, 'Áo voan tay lửng, cổ V', 'Áo sơ mi voan cổ V cách điệu, trẻ trung là một xu hướng mới ch', 140000, 'Sản phẩm', 'nuas0007.jpg', 0, 22, '2016-12-12'),
('nuas0008', 'Sơ mi nữ, xếp li', 5, 'Áo sơ mi trắng, xếp li', 'Áo sơ mi nữ, công sở thanh lịch, sử dụng cúc nhựa cao cấp đen', 140000, 'Sản phẩm', 'nuas0008.jpg', 0, 22, '2016-12-12'),
('nuas0009', 'Sơ mi nữ, phối ren', 5, 'Áo sơ mi ngắn tay, cổ tròn, phối ren', 'Với chất liệu sạn lụa co giãn thoáng mát, phối ren lưới đầy qu', 140000, 'Sản phẩm', 'nuas0009.jpg', 0, 24, '2016-12-12'),
('nuas0010', 'Sơ mi nữ, tay xòe', 5, 'Áo ngắn tay, cổ đính đá, tay xòe', 'Thời trang theo xu hướng', 140000, 'Sản phẩm', 'nuas0010.jpg', 0, 24, '2016-12-12'),
('nuas1001', 'Sơ mi nữ thắt nơ tay, xếp ly', 5, 'Áo sơ mi nữ tay dài, xếp ly', 'Áo sơ mi nữ tay dài có xếp ly và thắt nơ tay tạo cảm giác nữ t', 390000, 'Sản phẩm', 'nuas1001.jpg', 0, 73, '2016-12-12'),
('nuas1002', 'Sơ mi nữ sọc dọc trắng đen', 5, 'Áo sơ mi nữ hai túi, cổ chữ V', 'Áo sọc hai túi cùng với thiết kế cổ áo V Elly nổi bật, thời tr', 390000, 'Sản phẩm', 'nuas1002.jpg', 0, 74, '2016-12-12'),
('nuas1003', 'Sơ mi nữ phối ren', 5, 'Áo sơ mi nữ tiểu thư, phối ren', 'Áo sơ mi tiểu thư phối ren vi thiết kế thời trang, kiểu dáng l', 390000, 'Sản phẩm', 'nuas1003.jpg', 0, 75, '2016-12-12'),
('nuas1004', 'Sơ mi nữ, tay áo thêu hoa', 5, 'Áo sơ mi nữ, tay áo thêu hoa hồng', 'Sơ mi sọc dọc, form dài kết hợp cùng với thêu hoa hồng ở tay,', 280000, 'Sản phẩm', 'nuas1004.jpg', 0, 76, '2016-12-12'),
('nuas1005', 'Sơ mi nữ, ca rô, 2 túi', 5, 'Áo họa tiết ca rô xanh, hai túi', 'Áo sơ mi nữ dài tay họa tiết ca rô trẻ trung năng động, thời t', 280000, 'Sản phẩm', 'nuas1005.jpg', 0, 77, '2016-12-12'),
('nuas1006', 'Sơ mi nữ classic', 5, 'Sơ mi nữ cổ điển, màu trắng', 'Áo sơ mi nữ dài tay màu trắng với thiết cổ điển giúp tạo cảm g', 280000, 'Sản phẩm', 'nuas1006.jpg', 0, 91, '2016-12-12'),
('nuas1007', 'Sơ mi nữ cổ lọ', 5, 'Áo sơ mi nữ cổ lọ, sọc dọc', 'Áo sơ mi nữ dài tay, sọc dọc trắng đen, ôm dáng thanh lịch, th', 280000, 'Sản phẩm', 'nuas1007.jpg', 0, 91, '2016-12-12'),
('nuas1008', 'Sơ mi nữ, xếp li', 5, 'Áo sơ mi dài tay, xếp li ngực', 'Áo sơ mi nữ xếp li ngực dài tay, cực kì trẻ trung và năng động', 260000, 'Sản phẩm', 'nuas1008.jpg', 0, 91, '2016-12-12'),
('nuat0001', 'Áo thun nữ, kẻ sọc', 6, 'Áo thun nữ, ngắn tay, kẻ sọc', 'Áo thun nữ tay ngắn sọc ngang giúp tạo cảm giác tròn hơn cho c', 210000, 'Sản phẩm', 'nuat0001.jpg', 0, 39, '2016-12-12'),
('nuat0002', 'Áo thun nữ, form dài', 6, 'Áo thun ngắn tay, trắng, form dài', 'Áo thun nữ, ngắn tay trắng kết hợp với thiết kế form dài theo', 90000, 'Sản phẩm', 'nuat0002.jpg', 0, 39, '2016-12-12'),
('nuat0003', 'Áo thun nữ, ngắn tay, màu hồng', 6, 'Áo thun, ngắn tay, in chữ', 'Áo thun nữ, ngắn tay sọc trắng trên nền hồng có in chữ trắng,', 90000, 'Sản phẩm', 'nuat0003.jpg', 0, 39, '2016-12-12'),
('nuat0004', 'Áo thun nữ sành điệu', 6, 'Áo thun ngắn tay, in chữ', 'Form áo crop top, siêu cá tính, trẻ trung và năng động.', 90000, 'Sản phẩm', 'nuat0004.jpg', 0, 39, '2016-12-12'),
('nuat0005', 'Áo thun nữ, thời trang', 6, 'Áo thun ngắn tay, sọc ngang', 'Áo thun nữ ngắn tay, sọc ngang trắng đen tạo phong cách năng đ', 90000, 'Sản phẩm', 'nuat0005.jpg', 0, 39, '2016-12-12'),
('nuat1001', 'Áo thun nữ, tay lỡ', 6, 'Áo thun nữ, tay lỡ, áo liền nón', 'Với thiết kế áo liền nón theo phong cách trẻ trung năng động c', 230000, 'Sản phẩm', 'nuat1001.jpg', 0, 24, '2016-12-12'),
('nuat1002', 'Áo thun sọc ngang, có hình', 6, 'Áo thun nữ, tay dài, họa tiết kèm hìn', 'Áo thun nữ tay dài sọc ngang giúp tạo cảm giác tròn hơn cho cá', 230000, 'Sản phẩm', 'nuat1002.jpg', 0, 24, '2016-12-12'),
('nuat1003', 'Áo thun cổ tròn, viền tay', 6, 'Áo thun nữ tay dài, cổ tròn, viền tay', 'Thiết kế đơn giản với cổ tròn, thân áo đen và viền tay trắng t', 230000, 'Sản phẩm', 'nuat1003.jpg', 0, 24, '2016-12-12'),
('nuat1004', 'Áo thun len, phối sọc', 6, 'Áo thun len nữ, dài tay', 'Chất liệu len mỏng nhẹ, mềm mại, tạo cảm giác nữ tính hơn cho', 210000, 'Sản phẩm', 'nuat1004.jpg', 0, 24, '2016-12-12'),
('nuat1005', 'Áo thun nữ, bo tay, viền cổ', 6, 'Áo thun nữ dài tay, bo tay', 'Thiết kế theo phong cách Hàn Quốc, bo tay, viền cổ tạo cảm giá', 210000, 'Sản phẩm', 'nuat1005.jpg', 0, 24, '2016-12-12'),
('nuda1001', 'Đầm dạo phố', 9, 'Đầm dạo phố xẻ tà quyến rũ', 'Chất liệu thun gân co giãn vừa, thấm hút mồ hôi tốt tạo sự yên', 260000, 'Sản phẩm', 'nuda1001.jpg', 0, 45, '2016-12-12'),
('nuda1002', 'Đầm vạt xéo', 9, 'Đầm phối dây kéo vạt xéo sang trọng ', 'Chất liệu vải bố có độ co giãn, thấm hút mồ hôi đem lại cảm gi', 180000, 'Sản phẩm', 'nuda1002.jpg', 0, 45, '2016-12-12'),
('nuda1003', 'Đầm maxi', 9, 'Đầm maxi khoét cổ họa tiết tươi mát ', 'Chất liệu voan mát mẻ, nhanh khô, dễ giặt đem lại yên tâm cho', 180000, 'Sản phẩm', 'nuda1003.jpg', 0, 79, '2016-12-12'),
('nuda1004', 'Đầm hai túi', 9, 'Đầm hai túi xếp ly xinh xắn', 'Chất liệu cotton êm ái, nhẹ nhàng, thoáng mát không gây cảm gi', 180000, 'Sản phẩm', 'nuda1004.jpg', 0, 79, '2016-12-12'),
('nuda1005', 'Đầm xòe', 9, 'Đầm xòe phối nút sang trọng', 'Chất liệu chiffon mát mẻ, có độ rũ vừa phải, dễ giặt đem lại s', 180000, 'Sản phẩm', 'nuda1005.jpg', 0, 79, '2016-12-12'),
('nude0001', 'Dép nữ F.NIRVARA', 15, 'Dép nữ F.NIRVARA đính đinh sành điệu ', 'Chất liệu simili mềm mại, bền đẹp theo thời gian, là chất liệu', 130000, 'Sản phẩm', 'nude0001.jpg', 0, 11, '2016-12-12'),
('nude0002', 'Dép kẹp nữ', 15, 'Dép kẹp nữ DVS fashion', 'Chất liệu đế dép làm bằng cao su tổng hợp bền chắc với thiết k', 130000, 'Sản phẩm', 'nude0002.jpg', 0, 11, '2016-12-12'),
('nude0003', 'Dép kẹp nữ, kim tuyến', 15, 'Dép kẹp nữ kim tuyến', 'Chất liệu xốp nhẹ nhàng, có độ đàn hồi, mang êm chân, đem lại', 130000, 'Sản phẩm', 'nude0003.jpg', 0, 11, '2016-12-12'),
('nude0004', 'dép gia đình', 15, 'dép gia đình quai ngang thổ cẩm Hương', 'Chất liệu mây mềm mịn nhẹ nhàng cho bạn cảm giác thoải mái, êm', 80000, 'Sản phẩm', 'nude0004.jpg', 0, 11, '2016-12-12'),
('nude0005', 'Dép kẹp nữ DVS', 15, 'Dép kẹp nữ DVS simple', 'Chất liệu đế dép làm bằng cao su tổng hợp bền chắc. Thiết kế đ', 60000, 'Sản phẩm', 'nude0005.jpg', 0, 11, '2016-12-12'),
('nude0006', 'Dép cao gót', 15, 'Dép cao gót, 7 phân', 'Chất liệu da mềm mại, tự nhiên, bền chắc, siêu nhẹ và êm ái, t', 220000, 'Sản phẩm', 'nude0006.jpg', 0, 94, '2016-12-12'),
('nude0007', 'Dép cao gót quai ngang', 15, 'Dép cao gót, quai ngang, thời trang', 'Chất liệu da mềm mại, tự nhiên, bền chắc, siêu nhẹ và êm ái, t', 220000, 'Sản phẩm', 'nude0007.jpg', 0, 94, '2016-12-12'),
('nugi0001', 'Giày lười nữ', 14, 'Giày lười nữ phối lưới năng động', 'Chất liệu vải bền, mềm mại, tạo sự thoải mái trên từng bước ch', 400000, 'Sản phẩm', 'nugi0001.jpg', 0, 26, '2016-12-12'),
('nugi0002', 'Giày cao gót', 14, 'Giày cao gót 7 phân', 'Chất liệu da mềm mại, tự nhiên, bền chắc, siêu nhẹ và êm ái, t', 400000, 'Sản phẩm', 'nugi0002.jpg', 0, 26, '2016-12-12'),
('nugi0003', 'Giày cao gót đan quai', 14, 'Giày cao gót đan quai chéo 7 phân', 'Chất liệu simili mềm mại, tự nhiên, bền chắc, siêu nhẹ và êm á', 400000, 'Sản phẩm', 'nugi0003.jpg', 0, 26, '2016-12-12'),
('nugi0004', 'Giày búp bê', 14, 'Giày búp bê 4 phân nơ đính hạt xinh x', 'Chất liệu da PU mềm mại, tự nhiên, bền chắc, siêu nhẹ và êm ái', 400000, 'Sản phẩm', 'nugi0004.jpg', 0, 11, '2016-12-12'),
('nugi0005', 'Giày đế bằng nữ', 14, 'Giày đế bằng nữ phối lưới thời trang ', 'Chất liệu da PU và lưới mềm mại, tự nhiên, bền chắc, siêu nhẹ', 410000, 'Sản phẩm', 'nugi0005.jpg', 0, 11, '2016-12-12'),
('numk0001', 'Mắt kính Unisex Nữ', 19, 'Mắt kính, gọng tròn, màu tím', 'Chất liệu với tròng Polycarbonate có khả năng chống tia cực tí', 780000, 'Sản phẩm', 'numk0001.jpg', 0, 22, '2016-12-12'),
('numk0002', 'Mắt kính nữ gọng tròn', 19, 'Mắt kính, gọng tròn, thời trang', 'Chất liệu nhựa và kim loại cao cấp, đẹp, sáng bóng, bền màu, v', 780000, 'Sản phẩm', 'numk0002.jpg', 0, 19, '2016-12-12'),
('numk0003', 'Mắt kính Unisex cách điệu Nữ', 19, 'Mắt kính cách điệu, phong cách Hàn Qu', 'Chất liệu tròng Polycarbonate có khả năng chống tia cực tím, t', 780000, 'Sản phẩm', 'numk0003.jpg', 0, 19, '2016-12-12'),
('numk0004', 'Mắt kính nữ thời trang', 19, 'Mắt kính nữ, thời trang, phong cách H', 'Chất liệu tròng Polycarbonate có khả năng chống tia cực tím, t', 780000, 'Sản phẩm', 'numk0004.jpg', 0, 19, '2016-12-12'),
('numk0005', 'Kính mát nữ Jubilant', 19, 'Kính mát Jubilant unisex J45073M ', 'Chất liệu tròng Polycarbonate có khả năng chống tia cực tím, t', 780000, 'Sản phẩm', 'numk0005.jpg', 0, 19, '2016-12-12'),
('nuqj1001', 'Quần jean nữ, xanh dương', 7, 'Jean nữ dài, màu xanh', 'Chất liệu jean không quá dày, không nóng, tạo cảm giác thông t', 450000, 'Sản phẩm', 'nuqj1001.jpg', 0, 39, '2016-12-12'),
('nuqj1002', 'Quần jean nữ, xanh cổ điển', 7, 'Jean nữ dài, cổ điển', 'Chất liệu jean dày dặn, bền chắc, cho bạn yên tâm khi hoạt độn', 450000, 'Sản phẩm', 'nuqj1002.jpg', 0, 68, '2016-12-12'),
('nuqj1003', 'Jean skinny nữ trơn', 7, 'Jean skinny đen', 'Chất liệu jean không quá dày, không nóng, tạo cảm giác thông t', 450000, 'Sản phẩm', 'nuqj1003.jpg', 0, 68, '2016-12-12'),
('nuqj1004', 'Jean nữ, xanh bạc màu', 7, 'Jean skinny đơn giản', 'Chất liệu jean không quá dày, không nóng, tạo cảm giác thông t', 450000, 'Sản phẩm', 'nuqj1004.jpg', 0, 68, '2016-12-12'),
('nuqj1005', 'Jean skinny, rách', 7, 'Jean rách thời trang', 'Chất liệu jean không quá dày, không nóng, tạo cảm giác thông t', 470000, 'Sản phẩm', 'nuqj1005.jpg', 0, 68, '2016-12-12'),
('nuqj1006', 'Jean thun nữ', 7, 'Jean thun nữ, form ôm dáng', 'Chất liệu jean không quá dày, không nóng, tạo cảm giác thông t', 470000, 'Sản phẩm', 'nuqj1006.jpg', 0, 68, '2016-12-12'),
('nuqj1007', 'Jean nữ, thun 2 da', 7, 'Jean thun 2 da nữ', 'Chất liệu jean bền đẹp, co giãn, thấm hút tốt. Thiết kế kiểu q', 470000, 'Sản phẩm', 'nuqj1007.jpg', 0, 68, '2016-12-12'),
('nuqj1008', 'Quần jean nữ Jessi', 7, 'Jean nữ, wash thêu', 'Chất liệu jean không co giãn, thấm hút tốt. Thiết kế lưng thun', 470000, 'Sản phẩm', 'nuqj1008.jpg', 0, 68, '2016-12-12'),
('nuqj1009', 'Jean nữ xước', 7, 'Jean xước, xanh đen', 'Chất liệu jean bền đẹp, có độ co giãn nhẹ, cho bạn không bị gò', 330000, 'Sản phẩm', 'nuqj1009.jpg', 0, 77, '2016-12-12'),
('nuqj1010', 'Jean nữ, wash bạc', 7, 'Quần jean nữ, màu bạc', 'Chất liệu jean bền đẹp, có độ co giãn nhẹ, thấm hút mồ hôi tốt', 330000, 'Sản phẩm', 'nuqj1010.jpg', 0, 77, '2016-12-12'),
('nuqs0001', 'Short jean rách cá tính', 8, 'Short jean rách, màu xanh', 'Chất liệu jean cổ điển, bền đẹp theo thời gian, thấm hút mồ hô', 240000, 'Sản phẩm', 'nuqs0001.jpg', 0, 31, '2016-12-12'),
('nuqs0002', 'Quần Short Ruffle Can De Blanc', 8, 'Short ruffle, xanh nhạt', 'Chất liệu polyester cổ điển, bền đẹp theo thời gian, thấm hút', 240000, 'Sản phẩm', 'nuqs0002.jpg', 0, 31, '2016-12-12'),
('nuqs0003', 'Short giả váy', 8, 'Short giả váy, xinh xắn, màu đen', 'Chất liệu tuyết mưa thoáng mát cùng đường may chắc chắn, tỉ mỉ', 290000, 'Sản phẩm', 'nuqs0003.jpg', 0, 31, '2016-12-12'),
('nuqs0004', 'Quần short nữ MILAROSS', 8, 'Short nữ, xếp li', 'Chất liệu cotton cổ điển, bền đẹp theo thời gian, thấm hút mồ', 290000, 'Sản phẩm', 'nuqs0004.jpg', 0, 31, '2016-12-12'),
('nuqs0005', 'Quần short họa tiết', 8, 'Short nữ phối caro nơ dễ thương ', 'Chất liệu linen mát mẻ, thoáng mát, mang lại cảm giác thoải má', 290000, 'Sản phẩm', 'nuqs0005.jpg', 0, 45, '2016-12-12'),
('nuqs0006', 'Quần short nữ MILAROSS', 8, 'Quần short nữ MILAROSS xếp ly sang tr', 'Chất liệu cotton cổ điển, bền đẹp theo thời gian, thấm hút mồ', 390000, 'Sản phẩm', 'nuqs0006.jpg', 0, 45, '2016-12-12'),
('nuqs0007', 'Quần short thủy thủ', 8, 'Quần short thủy thủ, sọc dọc', 'Chất liệu kaki cổ điển, bền đẹp theo thời gian, thấm hút mồ hô', 390000, 'Sản phẩm', 'nuqs0007.jpg', 0, 45, '2016-12-12'),
('nuqs0008', 'Quần short nữ phối rách Style', 8, 'Quần short nữ phối rách Style, màu xa', 'Chất liệu jean bền, chắc chắn, thấm hút tốt, không hầm bí khi', 390000, 'Sản phẩm', 'nuqs0008.jpg', 0, 45, '2016-12-12'),
('nuqs0009', 'Quần short nữ Hàn Quốc', 8, 'Quần short nữ phối túi ngang', 'Chất liệu kate nỉ mát mẻ, thoáng mát, mang lại cảm giác thoải', 260000, 'Sản phẩm', 'nuqs0009.jpg', 0, 45, '2016-12-12'),
('nuqs0010', 'Quần giả váy đính nút', 8, 'Quần giả váy đính nút bên hông xinh x', 'Chất liệu thun 2 da thấm hút mồ hôi tốt, mềm mại, thoáng mát k', 260000, 'Sản phẩm', 'nuqs0010.jpg', 0, 45, '2016-12-12'),
('nuqt1001', 'Quần tây công sở nữ', 7, 'Quần tây nữ, kaki', 'Chất liệu kaki thoải mái, không gây hầm bí khi mặc cùng đường', 330000, 'Sản phẩm', 'nuqt1001.jpg', 0, 77, '2016-12-12'),
('nuqt1002', 'Quần tây nữ', 7, 'Quần công sở, chất liệu kaki', 'Chất liệu kaki thoải mái, không gây hầm bí khi mặc cùng đường', 280000, 'Sản phẩm', 'nuqt1002.jpg', 0, 77, '2016-12-12'),
('nuqt1003', 'Quần tây nữ thời trang', 7, 'Quần tây, thời trang công sở', 'Chất liệu kaki mềm mại, thoải mái khi sử dụng. Thiết kế kiểu d', 280000, 'Sản phẩm', 'nuqt1003.jpg', 0, 77, '2016-12-12'),
('nuqt1004', 'Quần tây nữ ống suông', 7, 'Quần tây, thời trang công sở', 'Chất liệu kaki thông thoáng, thấm hút tốt cho bạn thoải mái kh', 280000, 'Sản phẩm', 'nuqt1004.jpg', 0, 77, '2016-12-12'),
('nuqt1005', 'Quần tây nữ màu nâu', 7, 'Quần tây, thời trang công sở', 'Chất liệu kaki thông thoáng, thấm hút tốt cho bạn thoải mái kh', 170000, 'Sản phẩm', 'nuqt1005.jpg', 0, 77, '2016-12-12'),
('nuqt1006', 'Quần tây nữ phong cách thanh lịch', 7, 'Quần tây, ống ôm, thanh lịch', 'Chất liệu cotton dày dặn, bền chắc cho bạn yên tâm khi hoạt độ', 170000, 'Sản phẩm', 'nuqt1006.jpg', 0, 31, '2016-12-12'),
('nuqt1007', 'Quần tây phi thun', 7, 'Quần tây, ống suông, thun 2 da', 'Chất liệu phi thun 2 da dày dặn, bền chắc cho bạn yên tâm khi', 170000, 'Sản phẩm', 'nuqt1007.jpg', 0, 31, '2016-12-12'),
('nuqt1008', 'Quần tây nữ, thời trang, thanh lịch', 7, 'Quần tây nữ, màu xám', 'Chất liệu kaki mềm mại, thoải mái khi sử dụng. Thiết kế kiểu d', 240000, 'Sản phẩm', 'nuqt1008.jpg', 0, 31, '2016-12-12'),
('nusk0001', 'Giày Slip', 16, 'MUST Korea phong cách hiện đại Unisex', 'Chất liệu được làm bằng da bò thật 100%, mềm mại tự nhiên, bền', 410000, 'Sản phẩm', 'nusk0001.jpg', 0, 11, '2016-12-12'),
('nusk0002', 'Giày Slipon', 16, 'Giày Slipon QuickFree Lưới', 'Chất liệu vải mềm mại tự nhiên, bền chắc, tạo sự thoải mái với', 410000, 'Sản phẩm', 'nusk0002.jpg', 0, 11, '2016-12-12'),
('nusk0003', 'Giày Cột Dây Nữ', 16, 'Giày Cột Dây Nữ kim tuyến', 'Chất liệu vải canvas Oz20 sang trọng tự nhiên, bền chắc, tạo s', 410000, 'Sản phẩm', 'nusk0003.jpg', 0, 11, '2016-12-12'),
('nusk0004', 'Giày Cột Dây Nữ QuickFree', 16, 'Giày Cột Dây Nữ QuickFree PAN', 'Chất liệu vải canvas Oz20 sang trọng tự nhiên, bền chắc, tạo s', 260000, 'Sản phẩm', 'nusk0004.jpg', 0, 11, '2016-12-12'),
('nusk0005', 'Giày Slip-on', 16, 'Giày Slip-on Nữ QuickFree Lightly', 'Chất liệu vải mềm mại tự nhiên, bền chắc, tạo sự thoải mái với', 260000, 'Sản phẩm', 'nusk0005.jpg', 0, 11, '2016-12-12'),
('nutx0001', 'Túi xách nữ Alizabetha', 18, 'Túi xách nữ Alizabetha, sang trọng', 'Chất liệu da PU chắc chắn, thời trang, bền màu theo thời gian,', 820000, 'Sản phẩm', 'nutx0001.jpg', 0, 94, '2016-12-12'),
('nutx0002', 'Túi xách nữ thêu chỉ', 18, 'Túi xách nữ thêu chỉ sang trọng', 'Chất liệu simili bền đẹp, đem lại yên tâm cho người sử dụng. T', 510000, 'Sản phẩm', 'nutx0002.jpg', 0, 22, '2016-12-12'),
('nutx0003', 'Túi xách nữ mini', 18, 'Túi xách nữ, mini, màu hồng', 'Chất liệu simili mềm mại, bền đẹp, sáng bóng tạo sự sang trọng', 420000, 'Sản phẩm', 'nutx0003.jpg', 0, 22, '2016-12-12'),
('nutx0004', 'Túi xách Lata', 18, 'Túi xách unisex Lata cá tính', 'Chất liệu da Pu bền đẹp, giúp túi ít bị gãy, nhăn khi sử dụng.', 710000, 'Sản phẩm', 'nutx0004.jpg', 0, 22, '2016-12-12'),
('nutx0005', 'Túi xách thể thao Duti', 18, 'Túi xách thể thao, phối sọc, thời tra', 'Chất liệu dù bền đẹp, đáy balo chắc chắn, cùng dây đeo lớp chắ', 300000, 'Sản phẩm', 'nutx0005.jpg', 0, 22, '2016-12-12'),
('nutx0006', 'Túi đeo chéo', 18, 'Túi đeo chéo, họa tiết thổ cẩm', 'Chất liệu vải bố chắc chắn, dày dặn, bền đẹp theo thời gian. T', 300000, 'Sản phẩm', 'nutx0006.jpg', 0, 22, '2016-12-12'),
('nuva0001', 'Chân váy đan dây, màu đen', 10, 'Chân váy đan dây cá tính', 'Chất liệu tuyết mưa mềm mại, êm ái, thoáng mát, thấm hút mồ hô', 240000, 'Sản phẩm', 'nuva0001.jpg', 0, 79, '2016-12-12'),
('nuva0002', 'Chân váy ôm form dài', 10, 'Chân váy ôm form dài phong cách', 'Chất liệu tuyết mưa nhẹ nhàng, mềm mại, thoáng mát, thấm hút t', 240000, 'Sản phẩm', 'nuva0002.jpg', 0, 88, '2016-12-12'),
('nuva0003', 'Chân váy nữ kaki', 10, 'Chân váy nữ kaki thời trang', 'Chất liệu kaki nhung bền đẹp, chắc chắn, mang đến cho bạn cảm', 240000, 'Sản phẩm', 'nuva0003.jpg', 0, 88, '2016-12-12'),
('nuva0004', 'Chân váy ren', 10, 'Chân váy ren thời trang', 'Chất liệu ren mềm mại, thoáng mát, không lo hầm bí khi mặc. Th', 240000, 'Sản phẩm', 'nuva0004.jpg', 0, 88, '2016-12-12'),
('nuva0005', 'Chân váy jean', 10, 'Chân váy jean đan dây xinh xắn', 'Chất liệu jean, mang lại cảm giác thoáng mát khi mặc. Thiết kế', 310000, 'Sản phẩm', 'nuva0005.jpg', 0, 88, '2016-12-12'),
('pkvi0001', 'Ví/ Clutch cầm tay', 17, 'Ví đính kim tuyến sang trọng', 'Chất liệu simili bền đẹp, giúp túi ít bị gãy, nhăn khi sử dụng', 190000, 'Sản phẩm', 'pkvi0001.jpg', 0, 94, '2016-12-12'),
('pkvi0002', 'Ví đứng mini', 17, 'Ví đứng mini nữ Dibaoleiou', 'Chất liệu da pu cao cấp, kết hợp những đường may tinh tế và ch', 190000, 'Sản phẩm', 'pkvi0002.jpg', 0, 94, '2016-12-12'),
('pkvi0003', 'Ví nữ CNT', 17, 'Ví đa năng, thời trang', 'Chất liệu da PU tổng hợp bền đẹp, giúp túi ít bị gãy, nhăn khi', 60000, 'Sản phẩm', 'pkvi0003.jpg', 0, 94, '2016-12-12'),
('pkvi0004', 'Ví nữ CNT Letter', 17, 'Ví nữ CNT Letter xinh xắn', 'Chất liệu da pu mềm mại, chống thấm tốt, bền đẹp theo thời gia', 60000, 'Sản phẩm', 'pkvi0004.jpg', 0, 94, '2016-12-12'),
('pkvi0005', 'Combo túi và ví nữ', 17, 'Ví và túi nữ, đính chuôi, màu xám', 'Chất liệu da PU chắc chắn, thời trang, bền màu theo thời gian,', 60000, 'Sản phẩm', 'pkvi0005.jpg', 0, 94, '2016-12-12'),
('pkvi0006', 'Ví nữ Lata', 17, 'Ví nữ Lata xinh xắn, màu nâu', 'Chất liệu da PU tổng hợp bền đẹp, giúp túi ít bị gãy, nhăn khi', 450000, 'Sản phẩm', 'pkvi0006.jpg', 0, 94, '2016-12-12'),
('pkvi0007', 'Ví đựng passport', 17, 'Ví đựng passport nữ, màu cam', 'Ví đựng passport được làm từ chất liệu simili nên có độ bền ca', 120000, 'Sản phẩm', 'pkvi0007.jpg', 0, 94, '2016-12-12'),
('pkvi0008', 'Ví đa năng', 17, 'Ví đa năng, màu đỏ đô', 'Chất liệu da PU bền màu yên tâm khi sử dụng lâu dài. Thiết kế', 550000, 'Sản phẩm', 'pkvi0008.jpg', 0, 94, '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `A` varchar(10) DEFAULT NULL,
  `B` varchar(11) DEFAULT NULL,
  `C` varchar(8) DEFAULT NULL,
  `D` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`A`, `B`, `C`, `D`) VALUES
('ma_hoa_don', 'ma_san_pham', 'so_luong', 'don_gia'),
('1', '30', '3', '150000'),
('2', '31', '4', '150000'),
('3', '32', '1', '150000'),
('4', '33', '1', '150000'),
('5', '34', '4', '150000'),
('6', '35', '1', '150000'),
('7', '36', '5', '150000'),
('8', '37', '1', '150000'),
('9', '38', '1', '150000'),
('10', '39', '2', '150000'),
('11', '40', '4', '150000'),
('12', '41', '5', '150000'),
('13', '42', '3', '150000'),
('14', '43', '5', '150000'),
('15', '44', '5', '150000'),
('16', '45', '4', '150000'),
('17', '46', '3', '150000'),
('18', '47', '5', '150000'),
('19', '48', '1', '150000'),
('20', '49', '5', '150000'),
('21', '50', '3', '150000'),
('22', '51', '1', '150000'),
('23', '52', '2', '150000'),
('24', '53', '1', '150000');

-- --------------------------------------------------------

--
-- Table structure for table `vvisit_counter`
--

CREATE TABLE `vvisit_counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vvisit_counter`
--

INSERT INTO `vvisit_counter` (`id`, `tm`, `ip`) VALUES
(2, 1409823904, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`ma_bai_viet`),
  ADD KEY `ma_the_loai` (`ma_loai_bai_viet`),
  ADD KEY `ma_tac_gia` (`ma_nguoi_dung`),
  ADD KEY `ma_the_loai_2` (`ma_loai_bai_viet`),
  ADD KEY `ma_tac_gia_2` (`ma_nguoi_dung`);

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_san_pham`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Indexes for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  ADD PRIMARY KEY (`ma_loai_bai_viet`);

--
-- Indexes for table `loai_mat_hang`
--
ALTER TABLE `loai_mat_hang`
  ADD PRIMARY KEY (`ma_loai_mat_hang`);

--
-- Indexes for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`ma_loai_nguoi_dung`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai_san_pham`),
  ADD KEY `ma_loai_mat_hang` (`ma_loai_mat_hang`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `ma_loai_nguoi_dung` (`ma_loai_nguoi_dung`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `ma_loai_san_pham` (`ma_loai_san_pham`);

--
-- Indexes for table `vvisit_counter`
--
ALTER TABLE `vvisit_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `ma_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  MODIFY `ma_loai_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `loai_mat_hang`
--
ALTER TABLE `loai_mat_hang`
  MODIFY `ma_loai_mat_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `ma_loai_nguoi_dung` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `vvisit_counter`
--
ALTER TABLE `vvisit_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
