-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 26, 2021 lúc 03:34 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rapphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `idChucVu` varchar(25) NOT NULL,
  `tenChucVu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuc_vu`
--

INSERT INTO `chuc_vu` (`idChucVu`, `tenChucVu`) VALUES
('C01', 'Bán vé');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dinh_dang_phim`
--

CREATE TABLE `dinh_dang_phim` (
  `idDinhDang` varchar(25) NOT NULL,
  `ten` varchar(25) NOT NULL,
  `phuThu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dinh_dang_phim`
--

INSERT INTO `dinh_dang_phim` (`idDinhDang`, `ten`, `phuThu`) VALUES
('1', '2D', 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `ho` varchar(20) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `yKien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`ho`, `ten`, `mail`, `phone`, `yKien`) VALUES
('Huy', 'Trương Công Huy', 'conghuy100518@gmail.com', '', 'Rạp sạch mà đồ ăn ngon!! 10/10'),
('Sâm', 'Lâm Doanh Sâm', 'samlam015@gmail.com', '0936969690', 'Nhân Viên phục vụ chu đáo nhiệt tình lắm nha mọi người!!'),
('Tuấn', 'Huỳnh A Tuấn', 'tuanhuynh113@gmail.com', '0912334567', 'Zô rạp mà máy lạnh phà lạnh teooo, nhớ mặc áo dày khi zô rạp nha bà con'),
('Hải', 'Nguyễn Tuấn Hải', 'haihai009@gmail.com', '0365647890', 'Rạp giữ xe không lấy tiền là thấy mê rồi, LOVELOVE'),
('Nguyên', 'Hàng Tải Nguyên', 'nguyenlun123@gmail.com', '0975641234', 'Nhân viên dễ thương gì đâu <3 <3 '),
('Điều', 'Nguyễn Văn Điều', 'dieudeptrai@gmail.com', '0981478523', 'Rạp gần nhà nên đi coi quài à riết nhân viên quen mặt lun :))'),
('Đăng', 'Nguyễn Tấn Đăng', 'dangabc1@gmail.com', '0908523694', 'Nên tới và trải nghiệm. Đáng đồng tiền!!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe_ngoi`
--

CREATE TABLE `ghe_ngoi` (
  `idPhong` int(11) NOT NULL,
  `viTriHang` int(11) NOT NULL,
  `viTriCot` int(11) NOT NULL,
  `daChon` tinyint(1) NOT NULL,
  `idGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ghe_ngoi`
--

INSERT INTO `ghe_ngoi` (`idPhong`, `viTriHang`, `viTriCot`, `daChon`, `idGhe`) VALUES
(1, 1, 1, 0, 5),
(1, 2, 1, 0, 6),
(1, 3, 1, 0, 7),
(1, 4, 1, 0, 8),
(1, 5, 1, 0, 9),
(1, 1, 2, 0, 10),
(1, 2, 2, 0, 11),
(1, 3, 2, 0, 12),
(1, 4, 2, 0, 13),
(1, 5, 2, 0, 14),
(1, 1, 3, 0, 15),
(1, 2, 3, 0, 16),
(1, 3, 3, 1, 17),
(1, 4, 3, 0, 18),
(1, 5, 3, 0, 19),
(1, 1, 4, 0, 20),
(1, 2, 4, 0, 21),
(1, 3, 4, 1, 22),
(1, 4, 4, 1, 23),
(1, 5, 4, 0, 24),
(1, 1, 5, 0, 25),
(1, 2, 5, 0, 26),
(1, 3, 5, 1, 27),
(1, 4, 5, 1, 28),
(1, 5, 5, 0, 29),
(1, 1, 6, 0, 30),
(1, 2, 6, 0, 31),
(1, 3, 6, 1, 32),
(1, 4, 6, 1, 33),
(1, 5, 6, 0, 34),
(1, 1, 7, 0, 35),
(1, 2, 7, 1, 36),
(1, 3, 7, 1, 37),
(1, 4, 7, 0, 38),
(1, 5, 7, 0, 39),
(1, 1, 8, 0, 40),
(1, 2, 8, 1, 41),
(1, 3, 8, 1, 42),
(1, 4, 8, 0, 43),
(1, 5, 8, 0, 44),
(1, 1, 9, 0, 45),
(1, 2, 9, 0, 46),
(1, 3, 9, 0, 47),
(1, 4, 9, 0, 48),
(1, 5, 9, 0, 49),
(1, 1, 10, 0, 50),
(1, 2, 10, 0, 51),
(1, 3, 10, 0, 52),
(1, 4, 10, 0, 53),
(1, 5, 10, 0, 54),
(2, 1, 1, 0, 55),
(2, 2, 1, 0, 56),
(2, 3, 1, 0, 57),
(2, 4, 1, 0, 58),
(2, 5, 1, 0, 59),
(2, 1, 2, 0, 60),
(2, 2, 2, 0, 61),
(2, 3, 2, 0, 62),
(2, 4, 2, 0, 63),
(2, 5, 2, 0, 64),
(2, 1, 3, 0, 65),
(2, 2, 3, 0, 66),
(2, 3, 3, 1, 67),
(2, 4, 3, 0, 68),
(2, 5, 3, 0, 69),
(2, 1, 4, 0, 70),
(2, 2, 4, 0, 71),
(2, 3, 4, 1, 72),
(2, 4, 4, 0, 73),
(2, 5, 4, 0, 74),
(2, 1, 5, 0, 75),
(2, 2, 5, 0, 76),
(2, 3, 5, 1, 77),
(2, 4, 5, 1, 78),
(2, 5, 5, 1, 79),
(2, 1, 6, 0, 80),
(2, 2, 6, 0, 81),
(2, 3, 6, 1, 82),
(2, 4, 6, 1, 83),
(2, 5, 6, 1, 84),
(2, 1, 7, 0, 85),
(2, 2, 7, 1, 86),
(2, 3, 7, 1, 87),
(2, 4, 7, 0, 88),
(2, 5, 7, 0, 89),
(2, 1, 8, 0, 90),
(2, 2, 8, 1, 91),
(2, 3, 8, 1, 92),
(2, 4, 8, 0, 93),
(2, 5, 8, 0, 94),
(2, 1, 9, 0, 95),
(2, 2, 9, 0, 96),
(2, 3, 9, 0, 97),
(2, 4, 9, 0, 98),
(2, 5, 9, 1, 99),
(2, 1, 10, 0, 100),
(2, 2, 10, 0, 101),
(2, 3, 10, 0, 102),
(2, 4, 10, 0, 103),
(2, 5, 10, 0, 104),
(3, 1, 1, 0, 105),
(3, 2, 1, 0, 106),
(3, 3, 1, 0, 107),
(3, 4, 1, 0, 108),
(3, 5, 1, 0, 109),
(3, 1, 2, 0, 110),
(3, 2, 2, 0, 111),
(3, 3, 2, 0, 112),
(3, 4, 2, 0, 113),
(3, 5, 2, 0, 114),
(3, 1, 3, 0, 115),
(3, 2, 3, 0, 116),
(3, 3, 3, 0, 117),
(3, 4, 3, 0, 118),
(3, 5, 3, 0, 119),
(3, 1, 4, 0, 120),
(3, 2, 4, 0, 121),
(3, 3, 4, 0, 122),
(3, 4, 4, 0, 123),
(3, 5, 4, 0, 124),
(3, 1, 5, 0, 125),
(3, 2, 5, 0, 126),
(3, 3, 5, 0, 127),
(3, 4, 5, 0, 128),
(3, 5, 5, 0, 129),
(3, 1, 6, 0, 130),
(3, 2, 6, 0, 131),
(3, 3, 6, 0, 132),
(3, 4, 6, 0, 133),
(3, 5, 6, 0, 134),
(3, 1, 7, 0, 135),
(3, 2, 7, 0, 136),
(3, 3, 7, 0, 137),
(3, 4, 7, 0, 138),
(3, 5, 7, 0, 139),
(3, 1, 8, 0, 140),
(3, 2, 8, 0, 141),
(3, 3, 8, 0, 142),
(3, 4, 8, 0, 143),
(3, 5, 8, 0, 144),
(3, 1, 9, 0, 145),
(3, 2, 9, 0, 146),
(3, 3, 9, 0, 147),
(3, 4, 9, 0, 148),
(3, 5, 9, 0, 149),
(3, 1, 10, 0, 150),
(3, 2, 10, 0, 151),
(3, 3, 10, 0, 152),
(3, 4, 10, 0, 153),
(3, 5, 10, 0, 154);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gia_ve`
--

CREATE TABLE `gia_ve` (
  `idGiaVe` int(11) NOT NULL,
  `ten` varchar(25) NOT NULL,
  `donGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gia_ve`
--

INSERT INTO `gia_ve` (`idGiaVe`, `ten`, `donGia`) VALUES
(1, '2D', 80000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `idKhachHang` int(25) NOT NULL,
  `hoTen` varchar(25) NOT NULL,
  `soDienThoai` varchar(25) NOT NULL,
  `gioiTinh` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ngayDangKy` date NOT NULL,
  `matKhau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`idKhachHang`, `hoTen`, `soDienThoai`, `gioiTinh`, `email`, `ngayDangKy`, `matKhau`) VALUES
(5, 'Sam', '0902353688', 'Nữ', 'sam@gmail.com', '2021-04-23', '202cb962ac59075b964b07152d234b70'),
(8, 'Hải', '0123456789', 'Nam', 'hai@gmail.com', '2021-05-20', '202cb962ac59075b964b07152d234b70'),
(9, 'Phúc', '0489215687', 'Nam', 'phuc@gmail.com', '2021-05-20', '202cb962ac59075b964b07152d234b70'),
(10, 'Hoài', '0654651654', 'Nữ', 'hoai@gmail.com', '2021-05-20', '202cb962ac59075b964b07152d234b70'),
(11, 'Huy', '0234561846', 'Nam', 'huy@gmail.com', '2021-05-20', '202cb962ac59075b964b07152d234b70'),
(12, 'Thơ', '0264896154', 'Nam', 'tho@gmail.com', '2021-05-20', '202cb962ac59075b964b07152d234b70'),
(13, 'Thiện', '0146541651', 'Nam', 'thien@gmail.com', '2021-05-20', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `idNhanVien` varchar(25) NOT NULL,
  `hoTen` varchar(25) NOT NULL,
  `soDienThoai` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gioitinh` varchar(25) NOT NULL,
  `ngayVaoLam` date NOT NULL,
  `idChucVu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`idNhanVien`, `hoTen`, `soDienThoai`, `email`, `gioitinh`, `ngayVaoLam`, `idChucVu`) VALUES
('NV01', 'Nguyễn Văn A', '0123456789', 'abc@gmail.com', 'nam', '2021-04-09', 'C01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `idPhim` varchar(25) NOT NULL,
  `tenPhim` varchar(50) NOT NULL,
  `theLoai` varchar(50) NOT NULL,
  `thoiLuong` int(11) NOT NULL,
  `ngayCongChieu` date NOT NULL,
  `ngonNgu` varchar(50) NOT NULL,
  `dienVien` varchar(50) NOT NULL,
  `quocGia` varchar(25) NOT NULL,
  `nhaSanXuat` varchar(50) NOT NULL,
  `trangThai` tinyint(1) NOT NULL,
  `anhPhim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`idPhim`, `tenPhim`, `theLoai`, `thoiLuong`, `ngayCongChieu`, `ngonNgu`, `dienVien`, `quocGia`, `nhaSanXuat`, `trangThai`, `anhPhim`) VALUES
('001', 'FAST AND FURIOUS 9', 'Hành động / Phiêu lưu', 188, '2021-05-28', 'Tiếng Anh', 'Vin Diesel,John Cena, Michelle Rodriguez, Tyrese G', 'Mỹ', 'Neal H. Moritz, Vin Diesel', 1, 'imgPhim/Fast9.png'),
('002', 'GODZILLA & KING KONG', 'Hành động / Viễn tưởng', 113, '2021-03-25', 'Tiếng Anh', 'Millie Bobby Brown,Alexander Skarsgård,Rebecca Hal', 'Mỹ', 'Warner Bros', 1, 'imgPhim/kingkong.png'),
('003', 'LẬT MẶT: 48H', 'Hành động', 110, '2021-04-16', 'Việt nam', 'Ốc Thanh Vân, Huỳnh Đông, Mạc Văn Khoa, Võ Thành T', 'Việt Nam', 'Lý Hải', 1, 'imgPhim/LatMat.png'),
('004', 'THÁM TỪ LỪNG DANH CONAN: VIÊN ĐẠN ĐỎ', 'Hành động, Hoạt hình, Hồi hộp,', 111, '2021-04-23', 'Tiếng Nhật - Phụ đề Tiếng Việt', 'Minami Hamabe, Megumi Hayashibara, Ogata Kenichi, ', 'Nhật Bản', 'Tomoka Nagaoka', 1, 'imgPhim/Conan.png'),
('005', 'ONG NHÍ PHIÊU LƯ KÝ', 'Hoạt hình', 88, '2021-04-23', 'Tiếng Anh - Phụ đề tiếng Việt', 'Coco Jack Gillies, Evie Gillies, Benson Jack Antho', 'Anh', 'Noel Cleary', 1, 'imgPhim/OngNhiPhieuLuu.png'),
('006', 'MORTAL KOMBAT: CUỘC CHIẾN SINH TỬ  ', 'Hành động', 110, '2021-04-09', 'Tiếng Anh - Phụ đề tiếng Việt', 'Sanada Hiroyuki, Lewis Tan, Jessica McNamee ', 'Mỹ', 'Simon McQuoid ', 1, 'imgPhim/Mortalcombat.png'),
('007', 'THE UNHOLY: ẤN QUỶ  ', 'Kinh dị', 100, '2021-04-01', 'Tiếng Anh - Phụ đề tiếng Việt', 'Cary Elwes, Jeffrey Dean Morgan ', 'Mỹ', 'Ghost House Pictures ', 1, 'imgPhim/Unholy.png'),
('008', 'THE HYPNOSIS: CON LẮC TÀ THUẬT ', 'Kinh dị', 86, '2021-04-21', 'Hàn Quốc - Phụ đề tiếng Việt', 'David Lee, Shin Ji Won ', 'Hàn Quốc', 'Choi Jae Hoon  ', 1, 'imgPhim/Hypnosis.png'),
('009', 'SEOBOK: NGƯỜI NHÂN BẢN ', 'Ly Kì, Hành Động, Giả Tưởng  ', 114, '2021-04-15', 'Hàn Quốc - Phụ đề tiếng Việt', 'Gong Yoo, Park Bo Gum  ', 'Hàn Quốc', 'CJ Entertainment  ', 1, 'imgPhim/Seobok.png'),
('10', 'KIỀU', 'Tâm Lý', 90, '2021-04-07', 'Tiếng Việt', 'Trình Mỹ Duyên, NSND Lê Khanh, Cao Thái Hà ', 'Việt Nam', 'Mai Thu Huyền', 1, 'imgPhim/Kieu.png'),
('11', 'BÀN TAY DIỆT QUỶ', 'Hành Động, Kinh Dị', 128, '2021-04-09', 'Hàn Quốc - Phụ đề tiếng Việt', 'Park Seo Joon, Ahn Sung Ki, Woo Do Hwan', 'Hàn Quốc', 'Kim Joo Hwan', 1, 'imgPhim/EvilExpeller.png'),
('12', 'BẠN TÔI', 'Tâm Lý, Tình cảm', 125, '2021-04-16', 'Tiếng Anh - Phụ đề tiếng Việt', 'Jason Segel, Dakota Johnson, Casey Affleck', 'Mỹ', 'Gabriela Cowperthwaite', 1, 'imgPhim/bantoi.png'),
('13', 'RAYA VÀ RỒNG THẦN CUỐI CÙNG', 'Hoạt Hình', 114, '2021-03-05', 'Tiếng Anh với phụ đề tiếng Việt và lồng tiếng Việt', 'Awkwafina, Kelly Marie Tran', 'Anh', 'Don Hall, Carlos López Estrada', 0, 'imgPhim/raya.png'),
('14', 'ROUND TABLE: CAMELOT', 'Hoạt Hình 13+', 90, '2021-04-16', 'Tiếng Nhật - Phụ đề tiếng Việt', 'Mamoru Miyano, Nobunaga Shimazaki, Rie Takahashi', 'Nhật Bản', 'Kei Suezawa', 1, 'imgPhim/roundtable.png'),
('15', 'JOSEE: KHI NÀNG THƠ YÊU', 'Hoạt Hình', 98, '2021-04-09', 'Tiếng Nhật - Phụ đề tiếng Việt', 'Satoshi Tsumabuki , Chizuru Ikewaki', 'Nhật Bản', 'Kotaro Tamura', 1, 'imgPhim/josee.png'),
('16', 'BỐ GIÀ', 'Gia đình, Hài', 128, '2021-03-12', 'Tiếng Việt', 'Trấn Thành, Tuấn Trần, Ngân Chi, NSND Ngọc Giàu, L', 'Việt Nam', 'Trấn Thành', 0, 'imgPhim/bogia.png'),
('17', 'CRUELLA  ', 'Hài, Tội Phạm  ', 120, '2021-05-28', 'Tiếng Anh - Phụ đề tiếng Việt', 'Emma Stone, Emma Thompson, Mark Strong  ', 'Mỹ', 'TSG Entertainment  ', 1, 'imgPhim/CRUELLA.png'),
('18', 'BẪY NGỌT NGÀO', 'Tâm Lý', 126, '2021-05-21', 'Tiếng Việt', 'Bảo Anh, Minh Hằng, Diệu Nhi, Thuận Nguyễn', 'Việt Nam', 'Đinh Hà Uyên Thư', 1, 'imgPhim/bayngotngao.png'),
('19', 'VÙNG ĐẤT CÂM LẶNG II', 'Kinh dị', 120, '2021-05-28', 'Tiếng Anh - Phụ đề tiếng Việt', 'Cillian Murphy, Emily Blunt, Noah Jupe', 'Mỹ', 'John Krasinski', 1, 'imgPhim/vungdatcamlang.png'),
('20', 'BLACK WIDOW GÓA PHỤ ĐEN  ', 'Hành Động, Giả Tưởng, Phiêu Lư', 132, '2021-09-07', 'Tiếng Anh - Phụ đề tiếng Việt', 'Scarlett Johansson, Florence Pugh, Rachel Weisz  ', 'Mỹ', 'Marvel Studios  ', 1, 'imgPhim/black_widow_2.png'),
('21', 'THE KING\'S MAN KINGSMAN: KHỞI NGUỒN  ', 'Hành động', 133, '2021-08-21', 'Tiếng Anh - Phụ đề tiếng Việt', 'Gemma Arterton, Harris Dickinson, Ralph Fiennes  ', 'Anh', 'Matthew Vaughn  ', 1, 'imgPhim/kingsman.png'),
('22', 'NO TIME TO DIE KHÔNG PHẢI LÚC CHẾT ', 'Hành Động, Phiêu Lưu, Ly Kì  ', 142, '2021-08-10', 'Tiếng Anh - Phụ đề tiếng Việt', 'Daniel Craig, Rami Malek, Naomie Harris, Lea Seydo', 'Mỹ', 'Metro-Goldwyn-Mayer (MGM)  ', 1, 'imgPhim/notimetodie.png'),
('23', 'SHANG-CHI AND THE LEGEND OF THE TEN RINGS ', 'Hành Động ', 112, '2021-09-03', 'Tiếng Anh - Phụ đề tiếng Việt', 'Simi Liu, Lương Triều Vỹ, Awkwafina ', 'Mỹ', 'Walt Disney Pictures ', 1, 'imgPhim/shangchi.png'),
('24', 'CANDYMAN SÁT NHÂN TRONG GƯƠNG  ', 'Kinh dị,ly kì', 115, '2021-08-27', 'Tiếng Anh - Phụ đề tiếng Việt', 'Yahya Abdul-Mateen II, Teyonah Parris  ', 'Mỹ', 'Nia DaCosta ', 1, 'imgPhim/candyman.png'),
('25', 'ĐÊM TRÓI BUỘC', 'Hồi hộp, Kinh Dị', 110, '2021-05-07', 'Tiếng Ba Tư & Tiếng Anh - Phụ đề Tiếng Việt', 'Shahab Hosseini, Niousha Noor, Leah Oganyan', 'Mỹ', 'Kourosh Ahari', 1, 'imgPhim/demtroibuoc.png'),
('26', 'SPIRIT: CHÚ NGỰA BẤT KHAM', 'Hoạt Hình, Phiêu Lưu', 105, '2021-06-01', 'Tiếng Anh - Phụ đề Tiếng Việt; Lồng tiếng', 'Isabela Merced, Julianne Moore, Jake Gyllenhaal', 'Mỹ', 'Elaine Bogan', 1, 'imgPhim/spirit.png'),
('27', 'ĐỨA BÉ', 'Tâm Lý', 95, '2021-05-14', 'Tiếng Hàn - Phụ đề tiếng Việt', 'Kim Hyang Gi, Ryoo Hyoun Kyoung', 'Hàn Quốc', 'Kim Hyun Tak', 1, 'imgPhim/duabe.png'),
('28', 'CHÌA KHÓA TRĂM TỶ', 'Hài, Hành Động', 125, '2021-07-30', 'Tiếng Việt', ' Kiều Minh Tuấn, Thu Trang, Jun Vũ, Anh Tú, Puka', 'Việt Nam', 'Võ Thanh Hoà', 1, 'imgPhim/chiakhoa.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_chieu`
--

CREATE TABLE `phong_chieu` (
  `idPhong` int(11) NOT NULL,
  `soLuongHang` int(11) NOT NULL,
  `soLuongCot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong_chieu`
--

INSERT INTO `phong_chieu` (`idPhong`, `soLuongHang`, `soLuongCot`) VALUES
(1, 5, 10),
(2, 5, 10),
(3, 5, 10),
(4, 5, 10),
(5, 5, 10),
(6, 5, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suat_chieu`
--

CREATE TABLE `suat_chieu` (
  `idSuatChieu` int(11) NOT NULL,
  `gioBatDau` time NOT NULL,
  `gioKetThuc` time NOT NULL,
  `ngayChieu` date NOT NULL,
  `idPhim` varchar(25) NOT NULL,
  `idPhongChieu` int(11) NOT NULL,
  `idDinhDang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `suat_chieu`
--

INSERT INTO `suat_chieu` (`idSuatChieu`, `gioBatDau`, `gioKetThuc`, `ngayChieu`, `idPhim`, `idPhongChieu`, `idDinhDang`) VALUES
(1, '13:05:11', '15:05:11', '2021-05-18', '002', 2, '1'),
(2, '14:30:00', '16:30:00', '2021-05-18', '002', 2, '1'),
(3, '17:00:00', '19:00:00', '2021-05-18', '002', 2, '1'),
(4, '11:30:00', '13:30:00', '2021-06-16', '002', 2, '1'),
(5, '09:30:00', '11:30:00', '2021-06-16', '002', 2, '1'),
(6, '15:00:00', '17:00:00', '2021-06-16', '003', 2, '1'),
(7, '09:00:00', '11:00:00', '2021-05-15', '003', 2, '1'),
(8, '14:30:00', '16:30:00', '2021-05-15', '003', 4, '1'),
(9, '18:30:00', '20:30:00', '2021-05-15', '003', 4, '1'),
(10, '21:00:00', '23:00:00', '2021-06-30', '003', 3, '1'),
(11, '19:00:00', '21:00:00', '2021-05-23', '004', 3, '1'),
(12, '07:00:00', '09:00:00', '2021-05-23', '004', 3, '1'),
(13, '21:00:00', '23:00:00', '2021-06-17', '004', 3, '1'),
(14, '15:00:00', '17:00:00', '2021-06-17', '004', 3, '1'),
(15, '08:00:00', '09:30:00', '2021-06-24', '004', 3, '1'),
(16, '09:30:00', '11:00:00', '2021-06-24', '005', 3, '1'),
(17, '12:00:00', '13:30:09', '2021-06-24', '005', 3, '1'),
(18, '21:00:00', '22:30:00', '2021-06-24', '005', 3, '1'),
(19, '14:00:00', '15:30:00', '2021-06-24', '005', 3, '1'),
(20, '16:58:00', '19:05:11', '2021-05-21', '005', 4, '1'),
(21, '12:05:00', '14:05:11', '2021-05-21', '005', 1, '1'),
(22, '20:05:00', '22:05:11', '2021-05-21', '001', 1, '1'),
(23, '06:05:00', '08:05:11', '2021-06-01', '001', 1, '1'),
(24, '08:05:00', '10:05:11', '2021-06-01', '001', 1, '1'),
(25, '15:05:00', '17:05:11', '2021-06-01', '001', 1, '1'),
(26, '12:05:00', '14:05:11', '2021-06-02', '001', 2, '1'),
(27, '14:05:11', '14:05:11', '2021-06-03', '006', 2, '1'),
(28, '16:05:00', '14:05:11', '2021-06-03', '006', 2, '1'),
(29, '18:00:00', '12:05:11', '2021-06-04', '006', 2, '1'),
(30, '12:20:00', '14:05:11', '2021-06-04', '006', 2, '1'),
(31, '13:25:11', '15:35:11', '2021-05-18', '006', 4, '1'),
(32, '00:43:57', '23:00:00', '2021-05-20', '007', 5, '1'),
(33, '17:00:00', '19:00:00', '2021-05-27', '007', 2, '1'),
(34, '19:08:00', '20:59:00', '2021-05-18', '007', 3, '1'),
(35, '08:46:31', '07:00:00', '2021-05-12', '007', 2, '1'),
(36, '20:18:13', '22:00:00', '2021-05-31', '007', 3, '1'),
(37, '11:00:00', '13:00:00', '2021-05-28', '008', 2, '1'),
(38, '13:00:00', '15:00:00', '2021-05-14', '008', 5, '1'),
(39, '21:17:00', '23:00:00', '2021-05-28', '008', 2, '1'),
(40, '13:08:00', '15:00:00', '2021-05-21', '008', 1, '1'),
(41, '14:21:13', '16:00:00', '2021-05-21', '008', 6, '1'),
(42, '18:10:00', '20:00:00', '2021-05-26', '009', 2, '1'),
(43, '23:24:42', '01:00:00', '2021-05-06', '009', 3, '1'),
(44, '06:11:00', '08:00:00', '2021-05-18', '009', 3, '1'),
(45, '04:12:00', '06:00:00', '2021-05-23', '009', 2, '1'),
(46, '11:00:00', '13:00:00', '2021-05-24', '009', 1, '1'),
(47, '07:39:00', '09:27:00', '2021-05-31', '10', 5, '1'),
(48, '15:29:00', '17:18:00', '2021-06-09', '10', 4, '1'),
(49, '16:32:00', '18:59:00', '2021-05-14', '10', 3, '1'),
(50, '12:20:00', '14:08:00', '2021-05-31', '10', 2, '1'),
(51, '09:20:00', '06:09:00', '2021-05-19', '10', 3, '1'),
(52, '06:11:00', '08:06:00', '2021-05-13', '11', 4, '1'),
(53, '04:07:00', '06:11:00', '2021-06-03', '11', 3, ''),
(54, '07:00:00', '07:01:00', '2021-05-21', '11', 5, ''),
(55, '12:00:00', '14:11:00', '2021-06-23', '11', 4, ''),
(56, '09:20:00', '11:10:00', '2021-05-25', '11', 6, ''),
(57, '13:05:00', '15:00:00', '2021-05-11', '12', 5, ''),
(58, '19:00:00', '21:00:00', '2021-05-31', '12', 4, ''),
(59, '11:23:00', '12:09:00', '2021-05-24', '12', 4, ''),
(60, '04:00:00', '06:00:00', '2021-05-29', '12', 5, '1'),
(61, '20:44:00', '23:00:00', '2021-06-18', '12', 6, '1'),
(62, '18:19:00', '19:59:00', '2021-06-14', '13', 5, '1'),
(63, '23:00:00', '00:23:41', '2021-06-08', '13', 4, '1'),
(64, '10:22:00', '12:00:00', '2021-06-07', '13', 5, '1'),
(65, '23:00:00', '01:00:00', '2021-06-09', '13', 4, '1'),
(66, '23:15:00', '01:00:00', '2021-05-22', '13', 4, '1'),
(67, '13:22:00', '15:20:00', '2021-06-17', '14', 5, '1'),
(68, '09:19:00', '11:10:00', '2021-05-05', '14', 6, '1'),
(69, '06:53:00', '09:00:00', '2021-06-11', '14', 5, '1'),
(70, '23:00:00', '00:59:00', '2021-06-01', '14', 6, '1'),
(71, '11:20:00', '13:25:00', '2021-07-01', '14', 5, '1'),
(72, '03:15:00', '05:31:00', '2021-06-09', '15', 5, '1'),
(73, '06:23:00', '08:13:00', '2021-06-01', '15', 6, '1'),
(74, '23:00:00', '01:13:00', '2021-05-04', '15', 4, '1'),
(75, '04:15:00', '06:00:00', '2021-06-08', '15', 5, '1'),
(76, '06:15:00', '08:14:00', '2021-05-05', '15', 2, ''),
(77, '09:26:00', '11:13:00', '2021-05-19', '16', 6, ''),
(78, '14:00:00', '16:15:00', '2021-05-19', '16', 5, '1'),
(79, '16:13:00', '19:00:00', '2021-05-19', '16', 4, '1'),
(80, '09:19:00', '11:16:00', '2021-05-19', '16', 5, '1'),
(81, '21:00:00', '23:00:00', '2021-05-19', '16', 6, '1'),
(82, '23:00:00', '01:00:00', '2021-06-10', '17', 4, '1'),
(83, '08:25:00', '10:09:00', '2021-06-10', '17', 5, '1'),
(84, '14:22:00', '16:27:00', '2021-06-10', '17', 5, '1'),
(85, '12:22:00', '14:47:00', '2021-06-10', '17', 6, '1'),
(86, '15:17:00', '17:24:00', '2021-06-10', '17', 5, '1'),
(87, '07:16:00', '09:24:00', '2021-06-03', '18', 5, '1'),
(88, '08:17:00', '10:20:00', '2021-06-03', '18', 5, '1'),
(89, '23:00:00', '02:00:00', '2021-06-03', '18', 4, '1'),
(90, '18:00:00', '20:33:59', '2021-06-03', '18', 4, '1'),
(91, '05:11:00', '07:11:00', '2021-06-03', '18', 6, '1'),
(92, '11:21:00', '13:15:00', '2021-06-03', '19', 5, '1'),
(93, '09:19:00', '11:21:00', '2021-06-03', '19', 4, '1'),
(94, '14:26:00', '16:22:00', '2021-06-03', '19', 5, '1'),
(95, '17:26:00', '19:30:00', '2021-06-03', '19', 4, '1'),
(96, '07:17:00', '09:00:00', '2021-06-03', '19', 5, '1'),
(97, '07:23:00', '09:27:00', '2021-06-17', '20', 6, '1'),
(98, '18:34:00', '20:40:00', '2021-06-17', '20', 5, '1'),
(99, '17:00:00', '19:23:00', '2021-06-17', '20', 4, '1'),
(100, '08:21:00', '09:50:00', '2021-06-17', '20', 4, '1'),
(101, '08:00:00', '10:21:00', '2021-06-17', '20', 2, '1'),
(102, '04:17:00', '06:13:00', '2021-06-18', '21', 4, '1'),
(103, '13:30:00', '15:31:29', '2021-06-18', '21', 2, '1'),
(104, '09:27:00', '11:15:00', '2021-06-18', '21', 5, '1'),
(105, '06:22:00', '08:00:00', '2021-06-18', '21', 4, '1'),
(106, '08:18:00', '12:00:00', '2021-06-18', '21', 6, '1'),
(107, '09:22:00', '11:00:00', '2021-06-22', '22', 5, '1'),
(108, '08:00:00', '10:00:00', '2021-06-22', '22', 4, '1'),
(109, '04:07:00', '06:19:00', '2021-06-22', '22', 6, '1'),
(110, '13:23:00', '15:11:00', '2021-06-22', '22', 6, '1'),
(111, '04:19:00', '07:00:00', '2021-06-22', '22', 4, '1'),
(112, '07:13:00', '09:00:00', '2021-06-14', '23', 2, '1'),
(113, '06:00:00', '08:00:00', '2021-06-14', '23', 4, '1'),
(114, '13:42:58', '15:00:00', '2021-06-14', '23', 3, '1'),
(115, '07:13:00', '09:22:00', '2021-06-14', '23', 2, '1'),
(116, '11:23:00', '13:00:00', '2021-06-14', '23', 1, '1'),
(117, '07:00:00', '09:00:00', '2021-06-27', '24', 1, '1'),
(118, '21:00:00', '23:00:00', '2021-06-27', '24', 2, '1'),
(119, '15:00:00', '17:00:00', '2021-06-27', '24', 5, '1'),
(120, '18:00:00', '19:00:00', '2021-06-27', '24', 6, '1'),
(121, '11:00:00', '13:00:00', '2021-06-27', '24', 3, '1'),
(122, '08:00:00', '10:00:00', '2021-06-30', '25', 4, '1'),
(123, '15:00:00', '17:00:00', '2021-06-30', '25', 1, '1'),
(124, '04:00:00', '06:00:00', '2021-06-30', '25', 2, '1'),
(125, '09:00:00', '11:00:00', '2021-06-30', '25', 1, '1'),
(126, '05:00:00', '07:00:00', '2021-06-30', '25', 4, '1'),
(127, '08:00:00', '10:00:00', '2021-05-23', '26', 4, '1'),
(128, '13:00:00', '15:00:00', '2021-05-23', '26', 2, '1'),
(129, '23:00:00', '01:00:00', '2021-05-23', '26', 1, '1'),
(130, '00:00:00', '02:00:00', '2021-05-23', '26', 2, '1'),
(131, '05:00:00', '07:00:00', '2021-05-23', '26', 4, '1'),
(132, '08:00:00', '10:00:00', '2021-05-29', '27', 3, '1'),
(133, '04:00:00', '06:00:00', '2021-05-29', '27', 2, '1'),
(134, '07:00:00', '09:00:00', '2021-05-29', '27', 1, '1'),
(135, '10:00:00', '12:00:00', '2021-05-29', '27', 6, '1'),
(136, '05:00:00', '07:00:00', '2021-05-29', '27', 5, '1'),
(137, '15:00:00', '17:00:00', '2021-05-24', '28', 4, '1'),
(138, '23:00:00', '01:00:00', '2021-05-24', '28', 2, '1'),
(139, '09:00:00', '11:00:00', '2021-05-24', '28', 2, '1'),
(140, '07:00:00', '09:14:00', '2021-05-24', '28', 2, '1'),
(141, '05:32:00', '07:25:00', '2021-05-24', '28', 3, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve_ban`
--

CREATE TABLE `ve_ban` (
  `idVe` int(25) NOT NULL,
  `ngayBan` date NOT NULL,
  `thanhTien` int(11) NOT NULL,
  `idSuatChieu` varchar(25) NOT NULL,
  `idGiaVe` int(11) NOT NULL,
  `idGhe` int(11) NOT NULL,
  `idNhanVien` varchar(25) NOT NULL,
  `idKhachHang` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ve_ban`
--

INSERT INTO `ve_ban` (`idVe`, `ngayBan`, `thanhTien`, `idSuatChieu`, `idGiaVe`, `idGhe`, `idNhanVien`, `idKhachHang`) VALUES
(12, '2021-05-20', 80000, '23', 1, 36, 'NV01', 5),
(13, '2021-05-20', 80000, '23', 1, 41, 'NV01', 5),
(14, '2021-05-20', 80000, '23', 1, 17, 'NV01', 5),
(15, '2021-05-20', 80000, '23', 1, 22, 'NV01', 5),
(16, '2021-05-20', 80000, '23', 1, 27, 'NV01', 5),
(17, '2021-05-20', 80000, '23', 1, 32, 'NV01', 5),
(18, '2021-05-20', 80000, '23', 1, 37, 'NV01', 5),
(19, '2021-05-20', 80000, '23', 1, 42, 'NV01', 5),
(20, '2021-05-20', 80000, '4', 1, 78, 'NV01', 5),
(21, '2021-05-20', 80000, '4', 1, 83, 'NV01', 5),
(22, '2021-05-20', 80000, '4', 1, 79, 'NV01', 5),
(23, '2021-05-20', 80000, '4', 1, 84, 'NV01', 5),
(24, '2021-05-21', 80000, '24', 1, 23, 'NV01', 5),
(25, '2021-05-21', 80000, '24', 1, 28, 'NV01', 5),
(26, '2021-05-21', 80000, '24', 1, 33, 'NV01', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve_dat`
--

CREATE TABLE `ve_dat` (
  `idVeDat` varchar(25) NOT NULL,
  `idKhachHang` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`idChucVu`);

--
-- Chỉ mục cho bảng `dinh_dang_phim`
--
ALTER TABLE `dinh_dang_phim`
  ADD PRIMARY KEY (`idDinhDang`);

--
-- Chỉ mục cho bảng `ghe_ngoi`
--
ALTER TABLE `ghe_ngoi`
  ADD PRIMARY KEY (`idGhe`),
  ADD KEY `idPhong` (`idPhong`);

--
-- Chỉ mục cho bảng `gia_ve`
--
ALTER TABLE `gia_ve`
  ADD PRIMARY KEY (`idGiaVe`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`idKhachHang`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`idNhanVien`),
  ADD KEY `idChucVu` (`idChucVu`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`idPhim`);

--
-- Chỉ mục cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  ADD PRIMARY KEY (`idPhong`);

--
-- Chỉ mục cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  ADD PRIMARY KEY (`idSuatChieu`),
  ADD KEY `idPhim` (`idPhim`),
  ADD KEY `suat_chieu_ibfk_1` (`idPhongChieu`),
  ADD KEY `idDinhDang` (`idDinhDang`);

--
-- Chỉ mục cho bảng `ve_ban`
--
ALTER TABLE `ve_ban`
  ADD PRIMARY KEY (`idVe`),
  ADD KEY `idGiaVe` (`idGiaVe`),
  ADD KEY `idGhe` (`idGhe`),
  ADD KEY `idNhanVien` (`idNhanVien`),
  ADD KEY `idKhachHang` (`idKhachHang`);

--
-- Chỉ mục cho bảng `ve_dat`
--
ALTER TABLE `ve_dat`
  ADD PRIMARY KEY (`idVeDat`),
  ADD KEY `idKhachHang` (`idKhachHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ghe_ngoi`
--
ALTER TABLE `ghe_ngoi`
  MODIFY `idGhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `idKhachHang` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  MODIFY `idSuatChieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT cho bảng `ve_ban`
--
ALTER TABLE `ve_ban`
  MODIFY `idVe` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ghe_ngoi`
--
ALTER TABLE `ghe_ngoi`
  ADD CONSTRAINT `ghe_ngoi_ibfk_1` FOREIGN KEY (`idPhong`) REFERENCES `phong_chieu` (`idPhong`);

--
-- Các ràng buộc cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `nhan_vien_ibfk_1` FOREIGN KEY (`idChucVu`) REFERENCES `chuc_vu` (`idChucVu`);

--
-- Các ràng buộc cho bảng `ve_ban`
--
ALTER TABLE `ve_ban`
  ADD CONSTRAINT `ve_ban_ibfk_1` FOREIGN KEY (`idGiaVe`) REFERENCES `gia_ve` (`idGiaVe`),
  ADD CONSTRAINT `ve_ban_ibfk_2` FOREIGN KEY (`idGhe`) REFERENCES `ghe_ngoi` (`idGhe`),
  ADD CONSTRAINT `ve_ban_ibfk_3` FOREIGN KEY (`idNhanVien`) REFERENCES `nhan_vien` (`idNhanVien`),
  ADD CONSTRAINT `ve_ban_ibfk_4` FOREIGN KEY (`idKhachHang`) REFERENCES `khach_hang` (`idKhachHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
