-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 02:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team3web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'admin234', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(2, 'Trần Văn Bê', 'muoitran.31191026812@st.ueh.edu.vn', '220 Trương Phước Phan', 'fb881db0036e1bd0d98b88e9dddca2a0', '0889661834');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Bông tai', 0),
(2, 'Nhẫn', 0),
(3, 'Mặt dây chuyền', 0),
(4, 'Lắc & Vòng', 0),
(7, 'Dây chuyền', 0),
(8, 'Kiềng', 0),
(9, 'Miếng vàng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(1, 'Bông tai Vàng trắng 10K đính đá ECZ PNJ Hoa của Mẹ XM00W001083', '000', '4835000', 100, '1653414528_bong_tai_1.png', 'bông tai một ', 'nội dung bông tai một', 1, 1),
(2, 'Bông tai Vàng trắng 10K đính đá ECZ PNJ True Love XMXMW001749', '000', '3907000', 100, '1653414600_bong_tai_2.png', 'tóm tắt bông tai hai ', 'nội dung bông tai hai', 1, 1),
(3, 'Bông tai Vàng 10K PNJ True Love 0000Y002350', '000', '2663000', 100, '1653414649_bong_tai_3.png', 'aaaaaaaaaaaaaa', 'qqqqqqqqqqqqqqqqqqq', 1, 1),
(4, 'Bông tai Vàng 10K đính đá ECZ PNJ True Love XM00Y002378', '000', '4337000', 100, '1653414711_bong_tai_4.png', 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqq', 1, 1),
(5, 'Bông tai Vàng 18K PNJ 0000C000315 ', '000', '7973000', 100, '1653414765_bong_tai_5.png', 'qqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 1, 1),
(6, 'Bông tai Vàng trắng 10K đính đá ECZ PNJ XMXMW001329 ', '000', '4262000', 100, '1653414809_bong_tai_6.png', 'qqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqq', 1, 1),
(7, 'Bông tai vàng trắng 14K đính ngọc trai Akoya PNJ PAXMW000084', '000', '9652000', 100, '1653414890_bong_tai_7.png', 'qqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqq', 1, 1),
(8, 'Nhẫn cưới Kim cương Vàng 18K PNJ Vàng Son DD00Y000633', 'GNDD00Y000633', '5823000', 100, '1653418501_nhan_11.png', 'Trọng lượng vàng tham khảo (phân vàng): 6.74031\r\nLoại đá chính: Kim cương\r\nMàu đá chính: Trắng\r\nHình dạng đá: Tròn\r\nBộ sưu tập: Hạnh phúc vàng\r\nThương hiệu: PNJ\r\nKích thước đá chính (tham khảo): 1.9 ly\r\nC', 'Còn gì đẹp đẽ và tráng lệ hơn kim cương – loại đá quý tôn vinh vẻ đẹp hoàn hảo, thuần khiết và là biểu tượng của sự xa hoa. Sở hữu điểm nhấn kim cương cùng chất liệu vàng 18K trên thiết kế sang trọng, tạo nên vẻ ngoài đầy sự quý phái cho chiếc nhẫn Kim cương PNJ.\r\n\r\nKim cương không chỉ là một loại phụ kiện xa hoa để chứng tỏ sự đẳng cấp, nó còn làm nên nhan sắc, khí chất và sức hút cho người đeo. Diện trang sức kim cương, chắc chắn sẽ giúp bạn khoác lên mình vẻ ấn tượng vừa quyến rũ, vừa sang trọng và không kém phần thanh lịch.', 1, 2),
(9, ' Nhẫn cưới Vàng 18K PNJ Vàng Son 0000Y000353', 'GN0000Y000353', '6175000', 100, '1653417485_GN0000Y000353.png', 'Trọng lượng vàng tham khảo (phân vàng): 10.41027\r\n\r\nLoại đá chính: Không gắn đá\r\n\r\nThương hiệu: PNJ\r\n\r\nGiới tính: Nữ', '', 1, 2),
(10, 'Nhẫn cưới Kim cương Vàng 18K PNJ Chung Đôi DD00Y000547', 'GNDD00Y000547', '5907000', 40, '1653418476_nhan_10.png', 'Trọng lượng vàng tham khảo (phân vàng):\r\n6.51295\r\n \r\nThương hiệu:\r\nPNJ', '', 1, 2),
(11, 'Nhẫn cặp bạc đính đá PNJSilver 00040-00079', ' 00040-00079', '656.000', 79, '1653418615_nhan_3.png', 'Loại đá chính: CZ\r\nMàu đá chính: Trắng\r\nHình dạng đá: Tròn\r\nBộ sưu tập:Nhẫn cặp\r\nThương hiệu: PNJSilver', 'Trong thời đại ngày càng phát triển, việc đeo nhẫn đã không còn xa lạ đặc biệt là trong giới trẻ. Nếu nhẫn cưới là trái ngọt của tình yêu được đúc kết qua quá trình tìm hiểu, thì nhẫn cặp bạc lại là nơi lưu giữ kỷ niệm, cột mốc đáng nhớ giữa hai người. Sở hữu thiết kế hiện đại, nhẫn bạc PNJSilver trong BST Nhẫn cặp hiện đang là mẫu trang sức được nhiều cặp đôi lựa chọn.', 1, 2),
(12, 'Nhẫn bạc đính đá PNJSilver XMXMK000065', 'XMXMK000065', '444000', 99, '1653418789_nhan_7.png', 'Loại đá chính: CZ\r\nMàu đá chính: Trắng\r\nHình dạng đá: Tròn\r\nLoại đá phụ: CZ\r\nMàu đá phụ: Trắng\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', 'Đối với các cô gái trẻ hiện đại ngày nay, trang sức trở thành phụ kiện không thể thiếu khi kết hợp với set đồ hằng ngày của nàng. Đặc biệt là nhẫn bạc đính đá thường được các cô gái trẻ chọn lựa như là một “báu vật” giúp các nàng tỏa sáng trước đám đông. Mà nổi bật hơn hết là nhẫn bạc của thương hiệu PNJSilver. Với mẫu mã nhẫn tinh tế, kiểu dáng vô cùng đa dạng cùng chất liệu cao cấp nên được giới trẻ yêu thích.', 1, 2),
(13, 'Nhẫn nam bạc PNJSilver 0000K000059', '0000K000059', '338000', 60, '1653418986_nhan_4.png', 'Bộ sưu tập: Nhẫn cặp\r\nThương hiệu: PNJSilver\r\nGiới tính: Nam', 'Không chỉ có thiết kế ấn tượng mà những chi tiết nhỏ nhất trên từng sản phẩm bạc của PNJSilver luôn khiến bạn mê mẩn ngay từ cái nhìn đầu tiên. Không chỉ mang đến những món trang sức cho các cô gái, PNJSilver còn quan tâm đến phong cách cũng như sở thích thời trang phụ kiện của chàng, giúp phái mạnh tự tin và thể hiện sự nam tính của chính mình. Chiếc nhẫn bạc nam được thiết kế với kiểu dáng đơn giản nhưng tinh tế, mang đến vẻ đẹp lịch lãm và trẻ trung cho chàng.', 1, 2),
(14, 'Miếng Vàng 0.5 chỉ 24K PNJ Ông Tài 0000Y000305', '0000Y000305', '560000', 78, '1653419263_mieng_vang_1.png', 'Trọng lượng vàng tham khảo (phân vàng): 5.00000 \r\nLoại đá chính: Không gắn đá\r\nThương hiệu: PNJ', '', 1, 9),
(15, 'Miếng Vàng 1 chỉ 24K PNJ Ông Phúc 0000Y000024', '0000Y000024', '3450000', 1, '1653419344_mieng_vang_12.png', 'Trọng lượng vàng tham khảo (phân vàng):\r\n10.00000 \r\nThương hiệu: PNJ', '', 1, 9),
(16, 'Miếng Vàng 1 chỉ 24K PNJ Ông Tài 0000Y000020', '0000Y000020', '670000', 1, '1653419426_mieng_vang_5.png', 'Trọng lượng vàng tham khảo (phân vàng):\r\n10.00000\r\nThương hiệu: PNJ', '', 1, 9),
(17, 'Miếng Vàng 1 chỉ 24K PNJ Ông Lộc 0000Y000022', '0000Y000022', '980000', 1, '1653419498_mieng_vang_6.png', 'Trọng lượng vàng tham khảo (phân vàng):\r\n10.00000 \r\nThương hiệu: PNJ', '', 1, 9),
(18, 'Miếng Vàng 1 chỉ 24K PNJ Ông Phúc chữ Khang 0000Y000003', '0000Y000003', '560000', 1, '1653419582_mieng_vang_2.png', 'Trọng lượng vàng tham khảo (phân vàng):\r\n10.00000 \r\nThương hiệu: PNJ', '', 1, 9),
(19, 'Miếng Vàng 1 chỉ 24K PNJ Ông Lộc chữ An 0000Y000004', '0000Y000004', '444000', 1, '1653419665_mieng_vang_3.png', 'Trọng lượng vàng tham khảo (phân vàng): 10.00000 Thương hiệu: PNJ', '', 1, 9),
(20, 'Kiềng Vàng 24K PNJ 0000Y060118', '0000Y060118', '656.000', 1, '1653419843_kieng_1.png', '', 'Chiếc kiềng vàng PNJ sở hữu sự cứng cáp của vàng 24K được chế tác tinh xảo, kết hợp các chi tiết đúc, châu và khắc, tạo nên sự sáng bóng và sang trọng. Với một mặt có họa tiết và một mặt trơn, các nàng dâu có thể đeo theo 2 kiểu khác nhau phù hợp với trang phục trong ngày cưới.\r\nĐể tăng thêm lựa chọn trang sức, PNJ mang đến các mẫu kiềng mang kiểu dáng thanh lịch và mang tính ứng dụng cao, do đó ngoài việc dùng cho ngày cưới, nàng còn có thể đeo hàng ngày, phối hợp với nhiều trang phục khác nhau.', 1, 8),
(21, 'Kiềng bạc Ý PNJSilver 0000K060002', ' 0000K060002', '5907000', 1, '1653419949_kieng_4.png', 'Thương hiệu: PNJSilver\r\nGiới tính: Nữ', '', 1, 8),
(22, 'Kiềng bạc Ý PNJSilver 0000K060001', '0000K060001', '444000', 2, '1653420020_kieng_5.png', 'Thương hiệu: PNJSilver\r\nGiới tính: Nữ', '', 1, 8),
(23, 'Kiềng Vàng Ý trắng 18K PNJ 0000W060257', '0000W060257', '560000', 1, '1653420092_kieng_10.png', 'Thương hiệu: PNJSilver\r\nGiới tính: Nữ', '', 1, 8),
(24, 'Kiềng cưới vàng 24K PNJ 0000Y060111', '0000Y060111', '338000', 1, '1653420189_kieng3.png', 'Thương hiệu: PNJSilver Giới tính: Nữ', '', 1, 8),
(25, 'Dây chuyền Bạc PNJSilver 0000W060051', ' 0000W060051', '5907000', 1, '1653420356_day_chuyen_1.png', 'Loại đá chính: Không gắn đá\r\nLoại đá phụ: Không gắn đá\r\nThương hiệu: PNJSilver\r\nGiới tính: Unisex', 'Tiếp nối xu hướng trang sức theo phong cách trẻ trung và cá tính, những món trang sức từ PNJSilver chắc chắn sẽ làm dậy sóng thế giới thời trang của các chàng trai trẻ. Chiếc dây chuyền với cảm hứng thiết kế hoàn toàn mới lạ, đến từ những cung bậc cảm xúc sẽ đưa nàng đến với thế giới của riêng chàng.\r\nĐồng thời để khơi gợi sự chú ý, nàng hãy mix&match với các items khác để không chỉ nổi bật mà còn là tâm điểm của những bữa tiệc nhẹ cuối tuần', 1, 7),
(26, 'Dây chuyền Bạc PNJSilver 0000W060049', '0000W060049', '560000', 1, '1653420446_day_chuyen_2.png', 'Loại đá chính: Không gắn đá\r\nLoại đá phụ: Không gắn đá\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', 'Tiếp nối xu hướng trang sức theo phong cách trẻ trung và cá tính, những món trang sức từ PNJSilver chắc chắn sẽ làm dậy sóng thế giới thời trang của các cô gái trẻ. Chiếc dây chuyền với cảm hứng thiết kế hoàn toàn mới lạ, đến từ những cung bậc cảm xúc sẽ đưa nàng đến với thế giới của riêng nàng. Đồng thời để khơi gợi sự chú ý, nàng hãy mix&match với các items khác để không chỉ nổi bật mà còn là tâm điểm của những bữa tiệc nhẹ cuối tuần.', 1, 7),
(27, 'Dây chuyền Bạc PNJSilver 0000W060046', '0000W060046', '338000', 1, '1653420536_day_chuyen_4.png', 'Loại đá chính: Không gắn đá\r\nLoại đá phụ: Không gắn đá\r\nThương hiệu: PNJSilver', 'Tiếp nối xu hướng trang sức theo phong cách trẻ trung và cá tính, những món trang sức từ PNJSilver chắc chắn sẽ làm dậy sóng thế giới thời trang của các cô gái trẻ. Chiếc dây chuyền với cảm hứng thiết kế hoàn toàn mới lạ, đến từ những cung bậc cảm xúc sẽ đưa nàng đến với thế giới của riêng nàng. Đồng thời để khơi gợi sự chú ý, nàng hãy mix&match với các items khác để không chỉ nổi bật mà còn là tâm điểm của những bữa tiệc nhẹ cuối tuần.', 1, 7),
(28, 'Dây chuyền Vàng Ý 18K PNJ 0000Y060451', '0000Y060451', '5907000', 1, '1653420633_day_chuyen_6.png', 'Loại đá chính: Không gắn đá  \r\nThương hiệu: PNJ', 'Bằng việc kết hợp chất liệu vàng Ý 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác.\r\nDù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 1, 7),
(29, 'Dây chuyền Vàng 18K PNJ 0000Y060379', '0000Y060379', '3450000', 1, '1653420727_day_chuyen_10.png', 'Trọng lượng vàng tham khảo (phân vàng): 15.52352\r\nLoại đá chính: Không gắn đá\r\nThương hiệu: PNJ\r\nGiới tính: Nữ', 'Bằng việc kết hợp chất liệu vàng 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác. Dù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 1, 7),
(30, 'Lắc tay bạc đính đá PNJSilver ZT00B000006', 'ZT00B000006', '3450000', 1, '1653421662_lac_3.png', 'Loại đá chính: Sythetic\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', '', 1, 4),
(31, ' Lắc tay bạc Ý PNJSilver 0000W000038', '0000W000038', '5907000', 1, '1653421877_lac_4.png', 'Loại đá chính: Không gắn đá\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', 'Chiếc lắc tay từ PNJSilver được chế tác từ bạc Ý mang tính ứng dụng cao kết hợp kiểu dáng phá cách. Điều này giúp sản phẩm thổi màu thời thượng và cá tính vào phong cách của các bạn trẻ. Cũng vì tính ứng dụng cao mà hiện nay, bạc Ý đang được đông đảo chị em ưa chuộng.\r\nMột chiếc vòng tay hay chiếc lắc bạc nhỏ xinh sẽ là những phụ kiện ưu tiên hàng đầu của các nàng. Tuy sở hữu thiết kế không đính đá nhưng khi kết hợp cùng những bộ cánh dạo phố hay tiệc tùng, PNJSilver tin chắc rằng, nàng sẽ trông thật sự nổi bật và thu hút sự chú ý xung quanh.', 1, 4),
(32, 'Lắc tay Bạc Ý PNJSilver 0000W000032', ' 0000W000032', '5907000', 1, '1653421838_lac_5.png', 'Loại đá chính: gắn đá thạch anh\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', 'Chiếc lắc tay từ PNJSilver được chế tác từ bạc Ý mang tính ứng dụng cao kết hợp kiểu dáng phá cách. Điều này giúp sản phẩm thổi màu thời thượng và cá tính vào phong cách của các bạn trẻ. Cũng vì tính ứng dụng cao mà hiện nay, bạc Ý đang được đông đảo chị em ưa chuộng.\r\nMột chiếc vòng tay hay chiếc lắc bạc nhỏ xinh sẽ là những phụ kiện ưu tiên hàng đầu của các nàng. Tuy sở hữu thiết kế không đính đá nhưng khi kết hợp cùng những bộ cánh dạo phố hay tiệc tùng, PNJSilver tin chắc rằng, nàng sẽ trông thật sự nổi bật và thu hút sự chú ý xung quanh.', 1, 4),
(33, 'Lắc tay Vàng 14K đính ngọc trai Freshwater PNJ PF00Y000001', 'PF00Y000001', '656.000', 1, '1653422024_lac_2.png', 'Trọng lượng vàng tham khảo (phân vàng): 8.39654\r\nLoại đá chính: Ngọc trai\r\nMàu đá chính: Trắng\r\nHình dạng đá: Tròn \r\nThương hiệu: PNJ\r\nKích thước đá (tham khảo): 7.0 ly \r\nLoại ngọc trai: Freshwater\r\nGiới tín', 'Một biểu tượng của sự thuần khiết và mang vẻ đẹp sáng ngời như trăng rằm – Trang sức ngọc trai PNJ dang được rất nhiều chị em ưa chuộng. Hiện nay, ngọc trai được sử dụng trong việc chế tác trang sức như lắc tay PNJ đính ngọc trai, mề đay PNJ đính ngọc trai, nhẫn đính ngọc trai,… mang đến vẻ đẹp hoàn hảo, quý phái cho chủ sở hữu.', 1, 4),
(34, 'Lắc tay bạc PNJSilver Friendzone Breaker 0000X000001', ' 0000X000001', '560000', 1, '1653422125_lac_8.png', 'Bộ sưu tập: Friendzone Breaker\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', 'Luôn cập nhật xu hướng thời trang mới nhất, cùng sự thấu hiểu trọn vẹn, PNJSilver không ngừng sáng tạo ra những Bộ Sưu Tập mới lạ để mọi cô gái thêm nổi bật cùng nét đẹp vốn có của mình. Các cô gái của PNJSilver không chỉ được “thỏa thê” cùng những món quà trang sức thời trang mà còn được chìm đắm trong nhiều cung bậc cảm xúc với My Feeling – BST đậm chất thời trang “mới toanh” của PNJSilver.\r\n\r\n', 1, 4),
(35, 'Mặt dây chuyền Vàng trắng 14K đính Ngọc Trai Akoya PNJ PAXMW000021', 'PAXMW000021', '338000', 1, '1653422680_mat_day_chuyen_7.png', 'Trọng lượng vàng tham khảo (phân vàng): 3.87200\r\nLoại đá chính: Akoya Pearl \r\nLoại đá phụ: Xoàn mỹ\r\nThương hiệu: PNJ\r\nGiới tính: Nữ', 'Sở hữu viên ngọc trai vẹn tròn trên thiết kế mỹ miều, chiếc mặt dây chuyền Vàng 14K mang vẻ đẹp quý phái và thời thượng. Đến từ biển cả, ngọc trai AKoya mang hình dáng tròn, màu sắc bắt mắt là những đặc điểm khiến nó trở nên độc nhất vô nhị. Mặt dây khoác lên thiết kế nữ tính với sắc óng ánh xà cừ toát ra của viên ngọc trai hoàn hảo, tươi sáng, xứng đáng là “trợ thủ” nhấn nhá nét thanh lịch cho của nàng.', 1, 3),
(36, ' Mặt dây chuyền Vàng 18K đính đá Citrine PNJ CTXMY000300', 'CTXMY000300', '338000', 1, '1653422381_mat_day_chuyen_1.png', 'Loại đá chính: Citrine\r\nMàu đá chính: Cam\r\nLoại đá phụ: Xoàn mỹ\r\nMàu đá phụ: Trắng\r\nThương hiệu: PNJ', 'Sở hữu viên ngọc trai vẹn tròn trên thiết kế mỹ miều, chiếc mặt dây chuyền Vàng 14K mang vẻ đẹp quý phái và thời thượng. Đến từ biển cả, ngọc trai AKoya mang hình dáng tròn, màu sắc bắt mắt là những đặc điểm khiến nó trở nên độc nhất vô nhị. Mặt dây khoác lên thiết kế nữ tính với sắc óng ánh xà cừ toát ra của viên ngọc trai hoàn hảo, tươi sáng, xứng đáng là “trợ thủ” nhấn nhá nét thanh lịch cho của nàng.', 1, 3),
(37, 'Mặt dây chuyền Vàng 18K đính Ngọc trai Akoya PNJ PAXMY000029', 'PAXMY000029', '560000', 1, '1653422503_mat_day_chuyen_2.png', 'Loại đá chính: Akoya Pearl\r\nLoại đá phụ: Xoàn mỹ\r\nThương hiệu: PNJ\r\nKích thước đá (tham khảo): 8.5 ly\r\nLoại ngọc trai: Akoya\r\nGiới tính: Nữ', 'Sở hữu viên ngọc trai vẹn tròn trên thiết kế mỹ miều, chiếc mặt dây chuyền Vàng 14K mang vẻ đẹp quý phái và thời thượng. Đến từ biển cả, ngọc trai AKoya mang hình dáng tròn, màu sắc bắt mắt là những đặc điểm khiến nó trở nên độc nhất vô nhị. Mặt dây khoác lên thiết kế nữ tính với sắc óng ánh xà cừ toát ra của viên ngọc trai hoàn hảo, tươi sáng, xứng đáng là “trợ thủ” nhấn nhá nét thanh lịch cho của nàng.', 1, 3),
(38, 'Mặt dây chuyền Vàng trắng 14K đính đá Sapphire PNJ SPXMW000175', 'PNJ SPXMW000175', '656.000', 1, '1653422707_mat_day_chuyen_11.png', 'Loại đá chính: Sapphire\r\nLoại đá phụ: Xoàn mỹ\r\nThương hiệu: PNJ', 'Tạm quên đi trang sức đính đá màu trắng, PNJ mang đến sự bùng nổ về màu sắc và kiểu dáng. Mặt dây chuyền được chế tác từ vàng 14K với điểm nhấn Sapphire sặc sỡ trên thiết kế quý phái, tất cả đã tạo nên xu hướng đa sắc màu cho trang sức mùa này. \r\nCó nhiều màu sắc khác nhau, nhưng màu xanh đen luôn là sắc thái được ưa chuộng. Sắc màu sang trọng và bí ẩn, đại diện cho vẻ đẹp trưởng thành, cuốn hút của người phụ nữ. Sở hữu và ghi dấu khoảnh khắc đẹp nhất của mình thông qua chiếc mặt dây này nàng nhé.', 1, 3),
(39, 'Mặt dây chuyền Bạc đính đá PNJSilver hình Thánh Giá XMXMW060025', 'XMXMW060025', '656.000', 1, '1653422807_mat_day_chuyen_12.png', 'Loại đá chính: Xoàn mỹ\r\nMàu đá chính: Trắng\r\nHình dạng đá: Tròn\r\nLoại đá phụ: Xoàn mỹ\r\nThương hiệu: PNJSilver\r\nGiới tính: Nữ', 'Được hoàn thiện vẻ đẹp duy mỹ bởi những viên đá lấp lánh đính thủ công lên từng mảnh trang sức, chiếc mặt dây chuyền được chế tác từ chất liệu bạc cao cấp 92.5 kết hợp cùng sự lấp lánh của những viên đá màu trắng, tựa như đóa hoa bừng nở trên bề mặt một cách mỹ miều và tinh tế.', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
