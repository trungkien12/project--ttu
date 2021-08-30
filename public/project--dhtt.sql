-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2021 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project--dhtt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupnews`
--

CREATE TABLE `groupnews` (
  `id_groupnews` int(255) NOT NULL,
  `name_groupnews` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `groupnews`
--

INSERT INTO `groupnews` (`id_groupnews`, `name_groupnews`) VALUES
(1, 'Báo chí viết về TTU'),
(2, 'Nhật ký thực tập'),
(3, 'Sự kiện'),
(4, 'Tin tức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(255) NOT NULL,
  `id_groupnews` int(11) NOT NULL,
  `news_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `news_excerpt` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `news_imgexcerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `news_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `id_groupnews`, `news_title`, `news_excerpt`, `news_imgexcerpt`, `news_content`) VALUES
(1, 1, 'GS.TS.BS. Thạch Nguyễn – Cơ hội nâng tầm ngành tim mạch Việt Nam', 'NDĐT- Hội nghị tim mạch quốc tế Thăng Long lần thứ II với chủ đề Nơi ý tưởng thành hiện thực chính thức khai...', 'https://ttu.edu.vn/wp-content/uploads/2018/08/xf228e2d66ec486236fc924220389d6da.jpg.pagespeed.ic_.04fLOUT3uE.jpg', 'NDĐT- Hội nghị tim mạch quốc tế Thăng Long lần thứ II với chủ đề Nơi ý tưởng thành hiện thực chính thức khai mạc sáng 18-8 tại Cung hội nghị Quốc tế Ariyana Đà Nẵng. Đây là cơ hội nâng tầm ngành tim mạch Việt Nam vươn tầm thế giới, với sự tham dự của hơn 1.200 đại biểu trong nước và quốc tế.\r\n\r\nSự kiện do Hội tim mạch Hà Nội, Bệnh viện Tim Hà Nội và Hội tim mạch Việt Nam, phân hội Tim mạch can thiệp Việt Nam cùng phối hợp tổ chức. Theo thống kê của Tổ chức Y tế Thế giới, bệnh tim mạch là một trong những nguyên nhân hàng đầu gây tử vong trong số các bệnh mãn tính không lây. Bệnh tim mạch ảnh hưởng lớn đến chất lượng cuộc sống cộng đồng, là gánh nặng cho xã hội. Tại Việt Nam, những năm gần đây, tỷ lệ người mắc các bệnh tim mạch và liên quan đến tim mạch đang ở con số đáng báo động, đặt ra những nhiệm vụ và thách thức mới trong sứ mệnh của Hội Tim mạch Hà Nội.\r\n\r\nHội nghị Tim mạch quốc tế Thăng Long lần thứ II góp phần khẳng định sự phát triển vượt bậc của ngành Tim mạch học Việt Nam. Với gần 200 bản báo cáo khoa học, hội nghị đề cập đến hầu hết các lĩnh vực trong Khoa học Tim mạch, được trình bày tại 30 phiên họp. Trong đó có các phiên họp chuyên sâu mang tính chất khoa học của ngành tim mạch và các phiên đào tạo cơ bản dành cho các bác sĩ trẻ, các bác sĩ nội khoa chung. Hàng chục các báo cáo lâm sàng ghi nhận những tiến bộ trong nghiên cứu lâm sàng tim mạch học thời gian vừa qua như tiếp cận hội chứng vành cấp, cập nhật bệnh lý bệnh động mạch vành, các chiến lược can thiệp động mạch vành qua da, Cải thiện hậu dư Tim mạch, Phẫu thuật cho bệnh lý mạch vành và phẫu thuật ít xâm…\r\n\r\nHội nghị tri ân những giáo sư, tiến sĩ, các nhà khoa học đầu ngành, quốc tế và trong nước, đã có nhiều đóng góp cho sự phát triển của ngành Tim mạch học đồng thời mang lại nhiều lợi ích về sức khỏe cho nhân dân Hà Nội nói riêng và cả nước nói chung. Tặng danh hiệu Vì sự nghiệp xây dựng thủ đô năm 2017 cho hai Giáo sư Gérard Bonot và Thạch Nguyễn – Những người gắn bó 20 năm qua với ngành tim mạch Việt Nam; vinh danh các bác sĩ Trần Văn Dương, GS.TS. BS. Nguyễn Quang Tuấn và Giáo sư John Douglas – những người đầu tiên mở đường cho ngành Tim mạch học can thiệp Việt Nam nói chung và Hà Nội nói riêng\r\n\r\nNguồn: nhandan.com.vn'),
(2, 2, 'Gặp Gỡ đội Ngũ Làm Game Công Ty LEVEL EX – Game Dành Riêng...', 'Vào thứ hai ngày 23 tháng 9 năm 2019, Giáo sư Thạch Nguyễn, Quyền Hiệu Trưởng và Trưởng Khoa Y Đại Học Tân Tạo...', 'a/b/chttp://ttu.edu.vn/wp-content/uploads/2019/09/LEVEL-EX-01.jpg', 'Vào thứ hai ngày 23 tháng 9 năm 2019, Giáo sư Thạch Nguyễn, Quyền Hiệu Trưởng và Trưởng Khoa Y Đại Học Tân Tạo (TTU), cùng các sinh viên y khoa của Đại học Tân Tạo và các bác sĩ tốt nghiệp từ Khoa Y Phạm Ngọc Thạch đã đến văn phòng làm việc của công ty LEVEL EX để cùng thảo luận với bác sĩ Elsa Varghese – người phụ trách mảng y khoa của LEVEL EX. LEVEL EX là một công ty game chuyên sản xuất game dành cho các bác sĩ, y tá, chuyên gia y tế và sinh viên y khoa. https://www.level-ex.com/\r\nĐể trả lời các câu hỏi từ nhóm TTU, Bác sĩ Elsa Varghese của LEVEL EX trình bày phiên bản mới nhất của video game dành cho các bác sĩ hô hấp như một phiên bản mẫu của video game này cho các chuyên ngành khác (bao gồm cả khoa tim mạch). Trong cuộc thảo luận này, GS. Thạch Nguyễn đã giải thích những gì liên quan và những gì không cần quan tâm cần lượt bỏ bớt đối với các bác sĩ tim mạch, vì các bác sĩ tim mạch vốn đã là những người siêu bận rộn trong công việc của họ. GS. Thạch Nguyễn cũng nhấn mạnh rằng tính chính xác của thông tin y khoa trong các trò chơi cần phải hoàn hảo để LEVEL EX trở thành nhà tài trợ cho chương trình đào tạo y khoa liên tục (CME) cho các bác sĩ. GS. Thạch Nguyễn hứa sẽ mời trường y khoa Harvard làm nhà tài trợ cho chứng chỉ CME của các video game do công ty LEVEL EX tạo ra nếu các thông tin y tế trong các trò chơi chính xác và tiên tiến như những chương trình CME khác (đặc biệt là các chương trình từ Harvard).\r\n\r\n'),
(3, 1, 'Bán kết ‘Ươm mầm tài năng y khoa’: Đã tìm được 11 tài năng...', 'Sau vòng bán kết ngày 14/1/2018, Ban giám khảo cuộc thi đã chọn ra được 11 thí sinh xuất sắc nhất vào vòng chung...', 'https://ttu.edu.vn/wp-content/uploads/2018/01/image003_zzqp.jpg', 'Cuộc thi “Ươm mầm tài năng y khoa” của Đại học Tân Tạo (TTU) phối hợp cùng báo giáo dục TP.HCM đã nhận được sự tham gia đông đảo và nhiệt tình của học sinh lớp 11,12 ở các trường THPT trên địa bàn TP.HCM\r\nTừ hơn 3,000 thí sinh dự thi, Ban tổ chức đã chọn 55 thí sinh vào vòng bán kết. 55 thí sinh xuất sắc này đã được trường Đại học Tân Tạo giới thiệu và lựa chọn các Giáo sư cố vấn, hướng dẫn để cùng các thí sinh thực hiện những đề tài khoa học về ngành Y. Các chủ đề được các thí sinh thực hiện liên quan đến các vấn đề hay gặp về tim mạch, huyết áp, sinh lý, sức khỏe cộng đồng, tế bào gốc, trí thông minh nhân tạo, hệ thống y tế từ xa,…Mỗi thí sinh sẽ được hệ thống lựa chọn ngẫu nhiên cho 1 chủ đề, và các bạn có thời gian 2 tuần để tìm hiểu, nghiên cứu dưới sự giúp đỡ của 3 người hướng dẫn có chuyên môn.\r\n\r\nCác vị hướng dẫn cho các bạn đều là các GS. PGS. Bác sĩ đến từ Hoa Kỳ, Singapore, bệnh viện và Hội tim mạch Việt Nam. Bên cạnh đó, còn có các bạn sinh viên khoa Y Đại học Tân Tạo đồng hành cùng tất cả các thí sinh trong suốt quá trình nghiên cứu. Đây là cơ hội để các em tiếp cận mô hình giáo sư hướng dẫn nổi tiếng tại Hoa Kỳ và đang được áp dụng tại Đại học Tân Tạo.\r\n\r\nTại vòng bán kết, mỗi thí sinh trình bày bài thuyết trình của mình bằng tiếng Anh về lĩnh vực y khoa (15 phút) và trả lời các câu hỏi của Ban giám khảo (5 phút). Ban giám khảo là những bác sĩ giàu kinh nghiệm đang làm việc ở các bệnh viện tại TP.HCM, các vị giáo sư, tiến sĩ và chuyên gia đang công tác tại trường Đại học Tân Tạo và các trường ĐH lớn trên địa bàn TP.HCM.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fullName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `fullName`, `email`, `username`, `password`, `location`) VALUES
(8, 'Pham Trung Ki?n', 'kienpt72@wru.vn', 'kienpt72', '123456', 'HN'),
(10, 'pham trung hieu', 'hieupt72@wru.vn', 'hieupt72', '$2y$10$0ILIOKX0qcoDUR3r5hH4fO33ZglvxPmZ7Ja.MrQWqAxlSzveOvite', 'HN'),
(12, '', '', '', '', ''),
(13, '', '', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `groupnews`
--
ALTER TABLE `groupnews`
  ADD PRIMARY KEY (`id_groupnews`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `groupnews`
--
ALTER TABLE `groupnews`
  MODIFY `id_groupnews` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `groupnews` (`id_groupnews`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
