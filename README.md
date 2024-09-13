# WebGis-Travel
1. GIỚI THIỆU 
1.1. Mục tiêu của dự án 
Do nhu cầu tìm kiếm thông tin địa lý phục vụ cho du lịch ngày càng trở nên cao hơn, đặc 
biệt là nhu cầu tìm kiếm thông tin theo các địa điểm, theo tọa độ trong không gian và theo 
khoảng cách hiện nay chưa đáp ứng nhu cầu của người dùng. Mà hiện nay WebGIS là xu 
hướng phổ biến thông tin mạnh mẽ trên Internet không chỉ dưới góc độ thông tin thuộc tính 
thuần túy mà nó kết hợp được với thông tin không gian hữu ích cho người sử dụng. Bằng 
việc kết hợp GIS và Web để tạo thành WebGIS, người dùng sẽ dễ truy cập được các thông 
tin kết hợp với các bản đồ động để có được cái nhìn trực quan thông qua trình duyệt. Do 
đó, nếu ứng dụng WebGIS xây dựng bản đồ tra cứu thông tin du lịch của các địa điểm nổi 
tiếng ở thành phố Hồ Chí Minh thì có thể đáp ứng được nhu cầu của người dùng. Do đó 
xây dựng trang WebGIS với giao diện đa ngôn ngữ hiển thị các thông tin các đơn vị hành 
chính thành phố Hồ Chí Minh trên bản đồ, xây dựng các chức năng tương tác bản đồ, hiển 
thị, tìm kiếm (theo dữ liệu thuộc tính và dữ liệu không gian), tìm đường đi. 
1.2. Phạm vi của dự án 
Về không gian: tìm hiểu về các địa điểm thu hút khách du lịch ở thành phố Hồ Chí Minh 
và một số thành phố lân cận 
Về nội dung: đề tài xây dựng trang WebGIS hiển thị thông tin của các đơn vị hành chính 
ở thành phố Hồ Chí Minh, công cụ tương tác bản đồ cơ bản, truy vấn và quản lý cập nhật 
dữ liệu. 
Về công nghệ: sử dụng Visual Studio Code (để code HTML và CSS), hệ quản trị cơ sở dữ 
liệu SQL server 2008 (Postgresql), XAMPP để triển khai thử ứng dụng, dịch vụ 
openstreetmapvà Geoserver 
1.3. Đối tượng của dự án 
Đối tượng của dự án là người dùng có nhu cầu tìm kiếm thông tin du lịch tại thành phố Hồ 
Chí Minh và một số thành phố lân cận, bao gồm: 
• Du khách trong và ngoài nước. 
• Các nhà quản lý du lịch 
• Người dân địa phương. 
• Các tổ chức, doanh nghiệp hoạt động trong lĩnh vực du lịch. 
2. TỔNG QUAN VỀ CÔNG NGHỆ SỬ DỤNG  
2.1.  Geoserver 
2.1.1.  Khái niệm: 
GeoServer là một máy chủ mã nguồn mở với mục đích kết nối những thông tin địa lý có 
sẵn tới các Geoweb (trang Web địa lý) sử dụng chuẩn mở.  
Được bắt đầu bởi một tổ chức phi lợi nhuận có tên The Open Planning Project (TOPP), 
nhằm mục đích hỗ trợ việc xử lý thông tin không gian địa lý với chất lượng cao, đơn giản 
trong sử dụng, là phần mềm mã nguồn mở nhằm cung cấp và chia sẻ dữ liệu. 
GeoServer được viết bằng ngôn ngữ Java, cho phép người sử dụng chia sẻ và chỉnh sử dữ 
liệu không gian địa lý (geospatial data). Đây là một dự án mang tính cộng đồng, GeoServer 
được phát triển, kiểm thử và hỗ trợ bởi nhiều nhóm đối tượng và tổ chức khác nhau trên 
toàn thế giới.  
2.1.2. Chức năng: 
Geoserver cho phép người dùng hiển thị thông tin không gian của mình về thế giới. Cung 
cấp chuẩn Dịch vụ bản đồ (Web Map Service - WMS), GeoServer có thể tạo bản đồ và xuất 
ra nhiều định dạng. OpenLayers, một thư viện bản đồ hoàn toàn miễn phí, được tích hợp 
cùng GeoServer giúp cho công việc tạo bản đồ trở nên đơn giản hơn bao giờ hết. 
2.2. XAMPP 
2.2.1. Khái niệm 
XAMPP là một phần mềm cho phép giả lập môi trường server hosting ngay trên máy tính 
của bạn, cho phép bạn chạy demo website mà không cần phải mua hosting hay VPS. Chính 
vì vậy, XAMPP hay được phục vụ cho hoạt động học tập giảng dạy thực hành và phát triển 
web. 
XAMPP được viết tắt của X + Apache + MySQL + PHP + Perl vì nó được tích hợp sẵn 
Apache, MySQL, PHP, FTP server, Mail Server. Còn X thể hiện cho sự đa nền tảng của 
XAMPP vì nó có thể dùng được cho 4 hệ điều hành khác nhau: Windows, MacOS, Linux 
và Solaris. 
2.2.2. Chức năng 
XAMPP được dùng để xây dựng và phát triển website theo ngôn ngữ PHP. Ngoài ra, 
XAMPP còn được sử dụng để phát triển, nghiên cứu website thông qua localhost của máy 
tính cá nhân, biến máy tính cá nhân thành máy chủ, dùng chính ổ cứng của máy tính để làm 
nơi lưu trữ cho máy chủ trang web. 
XAMPP được dùng chủ yếu để học tập, nâng cấp và thử nghiệm web. 
2 
2.3. Leaflet 
Leaflet là một thư viện JavaScript mã nguồn mở để hiển thị bản đồ tương tác trên thiết bị 
di động. Nguyên lý thiết kế của nó là hiệu quả, nhẹ và thiết thực. Nó chỉ có kích thước 
khoảng 38KB nhưng có khả năng thao tác bản đồ mà hầu hết các nhà phát triển cần và có 
thể hoạt động trên nền tảng máy tính để bàn và thiết bị di động thông thường. Có hệ thống 
plug-in có thể mở rộng, mã rõ ràng và dễ đọc cũng như tài liệu sang trọng và API dễ vận 
hành. 
2.4.  HTML, CSS, JS 
2.4.1. HTML 
• HTML, một hệ thống định dạng để hiển thị tài liệu được truy xuất qua Internet. Mỗi 
đơn vị truy xuất được gọi là một trang Web (từ World Wide Web) và các trang như 
vậy thường chứa các liên kết siêu văn bản cho phép truy xuất các trang liên quan.  
• HTML là ngôn ngữ đánh dấu để mã hóa các trang Web.  
• Nó được thiết kế bởi nhà khoa học người Anh Sir Tim Berners-Lee tại phòng thí 
nghiệm vật lý hạt nhân CERN ở Thụy Sĩ trong những năm đầu 1990s. 
2.4.2. CSS 
Cascading Style Sheets (CSS) là một ngôn ngữ stylesheet được sử dụng để mô tả việc trình 
bày một tài liệu được viết bằng HTML hoặc XML (bao gồm các phương ngữ XML như 
SVG, MathML hoặc XHTML). CSS mô tả cách các phần tử sẽ được hiển thị trên màn hình, 
trên giấy, trong lời nói hoặc trên các phương tiện khác. 
2.4.3. JS 
JavaScript là ngôn ngữ kịch bản đa nền tảng, hướng đối tượng được sử dụng để làm cho 
các trang web tương tác. Ngoài ra còn có các phiên bản JavaScript phía máy chủ nâng cao 
hơn như Node.js, cho phép bạn thêm nhiều chức năng hơn vào trang web so với tải xuống 
tệp. Bên trong môi trường máy chủ, JavaScript có thể được kết nối với các đối tượng của 
môi trường của nó để cung cấp quyền kiểm soát theo chương trình đối với chúng. 
2.5.  PHP 
PHP: Hypertext Preprocessor, thường được viết tắt thành PHP là một ngôn ngữ lập trình 
kịch bản hay một loại mã lệnh chủ yếu được dùng để phát triển các ứng dụng viết cho máy 
chủ, mã nguồn mở, dùng cho mục đích tổng quát.  
Nó rất thích hợp với web và có thể dễ dàng nhúng vào trang HTML. Do được tối ưu hóa 
cho các ứng dụng web, tốc độ nhanh, nhỏ gọn, cú pháp giống C và Java, dễ học và thời gian 
xây dựng sản phẩm tương đối ngắn hơn so với các ngôn ngữ khác nên PHP đã nhanh chóng 
trở thành một ngôn ngữ lập trình web phổ biến nhất thế giới. 
3 
2.6. PostgreSQL 
PostgreSQL là một hệ thống quản trị cơ sở dữ liệu quan hệ miễn phí và nguồn mở (RDBMS) 
tập trung vào khả năng mở rộng và tuân thủ các tiêu chuẩn kỹ thuật. Nó được thiết kế để 
xử lý một loạt các khối lượng công việc lớn, từ các máy tính cá nhân đến kho dữ liệu hoặc 
dịch vụ Web có nhiều người dùng đồng thời. 
3. PHÂN TÍCH VÀ KIẾN TRÚC WEB 
3.1.  Trang chủ (trang chủ) 
Trang chủ: Thiết kế giao diện thể hiện thông tin, hình ảnh chung về trang web tìm kiếm 
(Travelwebgis) 
3.2.  Trang thông tin thành viên (chúng tôi) 
Trang giới thiệu: Thiết kế giao diện web với nội dung là giới thiệu thông về thành viên 
nhóm, bao gồm: tên, lớp, khoa, mã số sinh viên, quê quán và hình ảnh của từng thành viên. 
3.3.  Trang tìm địa điểm (Vi Vu) 
3.3.1.  Chức năng sử dụng - Tìm kiếm địa điểm du lịch: Người dùng có thể tìm kiếm các địa điểm du lịch theo tên 
khu vực tùy muốn của khách hàng (Chức năng này truy vấn từ cơ sở dữ liệu để lấy thông 
tin về các địa điểm được lưu trữ). - Xem chi tiết địa điểm: Hiển thị thông tin chi tiết về địa điểm như mô tả vị trí trên bản 
đồ. - Quản lý địa điểm: Quản trị viên có thể thêm, sửa, xóa các địa điểm thông qua cơ sở dữ 
liệu (postgresql) - Tương tác với bản đồ: Người dùng có thể phóng to, thu nhỏ, di chuyển bản đồ để xem 
các địa điểm du lịch khác nhau, thay đổi loại bản đồ thể hiện.  
3.3.2.  Yêu cầu chức năng Website - Trang bản đồ: phục vụ chức năng tìm các địa điểm du lịch, khách sạn, nhà hàng,… 
3.3.3. Yêu cầu phi chức năng 
Website phản hồi nhanh chóng các yêu cầu tìm kiếm và tương tác với bản đồ. Dễ sử dụng: 
Giao diện người dùng phải thân thiện, dễ sử dụng và trực quan. 
3.3.4.  Kiến trúc trang web 
3.3.4.1. Tổng quan hệ thống 
Hệ thống của trang web (trang dịch vụ tìm kiếm địa điểm) sẽ bao gồm các thành phần sau: 
• Client (Trình duyệt Web): Giao diện người dùng (UI) nơi khách hàng nhập khu 
vực mong muốn và nhận kết quả tìm kiếm. 
4 
• Web Server (Apache): Server để phục vụ các file tĩnh (HTML, CSS, JS) và xử 
lý các yêu cầu từ client. 
• Application Server (PHP): Xử lý logic nghiệp vụ, kết nối và truy vấn cơ sở dữ 
liệu, và tương tác với các dịch vụ bản đồ. 
• Cơ sở dữ liệu (PostgreSQL): Lưu trữ thông tin về các địa điểm (du lịch, khách 
sạn, nhà hàng,…) và lưu trữ thông tin mà khách hàng gửi (tên, email, số điện 
thoại, nội dung phản hồi về ứng dụng. 
• Geoserver: Cung cấp các lớp dữ liệu (lớp dữ liệu điểm về các địa điểm) và hỗ trợ 
các dịch vụ bản đồ: GetFeatureInfo. 
• Leaflet: Thư viện JavaScript để hiển thị bản đồ tương tác trên client (các loại bản 
đồ, phóng to thu nhỏ và tìm đường đi). 
3.3.4.2. Mô hình chi tiết 
Mô tả chi tiết về cách các thành phần tương tác với nhau trong từng phần của hệ thống. 
➢ Tìm kiếm địa điểm du lịch trong khu vực mong muốn 
o Client 
▪ Người dùng nhập khu vực mong muốn vào form tìm kiếm. 
▪ Gửi yêu cầu HTTP đến server với thông tin khu vực. 
o Web Server (Apache) 
▪ Nhận yêu cầu từ client. 
▪ Chuyển yêu cầu đến PHP script tương ứng. 
o Application Server (PHP) 
▪ Kết nối với cơ sở dữ liệu PostgreSQL. 
▪ Nhận đầu vào từ người dùng thông qua các tham số GET. 
▪ Gọi API Nominatim của OpenStreetMap để tìm kiếm vị trí địa lý dựa 
trên đầu vào. 
▪ Truy vấn cơ sở dữ liệu PostgreSQL để tìm các địa điểm du lịch nằm 
trong bounding box trả về từ API Nominatim. 
▪ Trả về kết quả dưới dạng JSON.  
o Cơ sở dữ liệu (PostgreSQL) 
▪ Trả về danh sách các địa điểm nằm trong khu vực mong muốn. 
o Application Server (PHP) 
▪ Xử lý kết quả truy vấn và tạo ra phản hồi HTML/JSON. 
▪ Gửi phản hồi về cho client. 
o Client 
▪ Hiển thị danh sách các địa điểm và kèm bên cạnh là nút chọn hướng 
dẫn đường đi. 
5 
➢ Xác định đường đi từ vị trí hiện tại đến địa điểm đã chọn 
o Client 
▪ Người dùng chọn một địa điểm từ danh sách và bấm vào nút "Đường 
đi". 
▪ Gửi yêu cầu HTTP: Yêu cầu này bao gồm thông tin về địa điểm đã 
chọn (tọa độ đích) và tọa độ hiện tại của người dùng (tọa độ nguồn). 
Yêu cầu được gửi đến server để gọi đến dịch vụ điều hướng (routing 
service) nhằm tính toán đường đi. 
o Web Server (Apache) 
▪ Nhận yêu cầu từ client. 
▪ Chuyển yêu cầu đến PHP script tương ứng. 
o Application Server (PHP) 
▪ PHP script xử lý yêu cầu: PHP script sẽ nhận yêu cầu từ web server, 
bao gồm tọa độ hiện tại của người dùng và tọa độ của địa điểm đã 
chọn. Sử dụng dịch vụ điều hướng (routing service) của 
OpenRouteService để tính toán đường đi từ tọa độ nguồn đến tọa độ 
đích. 
▪ Gọi dịch vụ điều hướng: Gửi yêu cầu HTTP đến API của dịch vụ điều 
hướng với tọa độ nguồn và tọa độ đích. 
▪ Nhận phản hồi từ API dưới dạng JSON chứa thông tin về tuyến đường  
▪ Tạo phản hồi HTML/JSON: Xử lý dữ liệu JSON nhận được từ dịch vụ 
điều hướng. Gửi phản hồi này về cho client. 
o Client 
▪ Nhận phản hồi từ server. 
▪ Sử dụng Leaflet (thư viện JavaScript để hiển thị bản đồ) để hiển thị 
tuyến đường trên bản đồ. Người dùng có thể xem được đường đi từ vị 
trí hiện tại đến địa điểm đã chọn.  
3.4 Trang thông tin liên hệ (Liên hệ) 
3.4.1 Yêu cầu chức năng 
Trang liên hệ: Bao gồm thông tin liên lạc và form điền thông tin của khách hàng. Những 
thông tin đó sẽ được gửi đến server và lưu vào cơ sở dữ liệu 
3.4.2 Kiến trúc trang web 
Trang web này sẽ bao gồm các thành phần sau để xử lý thông tin liên hệ từ khách hàng: 
• Client (Trình duyệt Web): Giao diện người dùng nơi khách hàng điền thông tin liên 
hệ và gửi thông tin này. 
• Web Server (Apache): Server để phục vụ các file tĩnh (HTML, CSS, JS) và xử lý 
các yêu cầu từ client. 
• Application Server (PHP): Xử lý logic nghiệp vụ, kết nối và lưu thông tin vào cơ sở 
dữ liệu. 
6 
• Cơ sở dữ liệu (PostgreSQL): Lưu trữ thông tin liên hệ của khách hàng. 
4. TRIỂN KHAI VÀ PHÁT TRIỂN 
4.1 Cài đặt công cụ  
4.1.1. Cài đặt XAMPP 
Bước 1: Tải về XAMPP - 
Truy 
cập 
trang 
web 
của 
XAMPP 
(https://www.apachefriends.org/download.html) - 
tại 
Apache 
Friends 
Chọn phiên bản XAMPP phù hợp với hệ điều (ở đây nhóm cài phiên bản 8.2.12/PHP 
8.2.12 – phiên bản có cả tomcat) - 
Nhấn vào nút "Download" để tải về. 
Bước 2: Cài đặt XAMPP - - 
Sau khi tải về, mở file cài đặt (.exe) để bắt đầu quá trình cài đặt. 
Trong cửa sổ Setup, nhấn "Next". 
7 
- - - 
Chọn các thành phần muốn cài đặt (mặc định đã chọn các thành phần cần thiết), 
nhấn "Next". 
Chọn thư mục cài đặt, mặc định là C:\xampp, nhấn "Next". 
Có thể bỏ chọn "Learn more about Bitnami for XAMPP" nếu không cần thiết, nhấn 
"Next". - - 
Nhấn "Next" lần nữa để bắt đầu quá trình cài đặt. 
Đợi quá trình cài đặt hoàn tất, nhấn "Finish". 
4.1.2.  Cài đặt Geoserver - Vào trang web https://geoserver.org/release/stable/ tải file web Archive 
8 
- 
Sau khi tải thành công, giải nén folder và copy file geoserver.war vào thư mục tomcat 
trong apache (C:\xampp\tomcat\webapps) 
4.1.3.  Cài đặt PostGressSQL -  
Điều hướng trình duyệt web của bạn tới trang web PostgreSQL và trang tải 
xuống http://www.postgresql.org/download/ - Nhấp chuột vào Download. 
Hình 5: Nhấn vào Download để tải PostGresSQL - 
Khi nó đã hoàn tất tải về, chạy Trình cài đặt → Next 
9 
- 
Đảm bảo hộp đã được kiểm tra trước khi bạn nhấp vào “Finish.” - 
Khi trình thủ thuật StackBuilder mở ra, chọn cài đặt PostgresSQL từ trình đơn thả 
xuống và nhấp vào Next.  
10 
- 
Mở tab “Spatial Extensions” và chọn hộp kiểm bên cạnh PostGIS.  - 
Nhấp vào Next để tải các phần mở rộng và cài đặt. Khi được nhắc, hãy nhấp vào “I 
Agree” để chấp nhận các điều khoản và điều kiện. 
4.1.4. Tích hợp leaflet vào dự án - Cách sử dụng sử dụng CDN: 
11 
Figure 1 Bản đồ nền 
4.2 Phát triển giao diện người dùng và phần xử lý  
4.2.1 Trang chủ 
Code HTLM: 
12 
Code css: 
4.2.2 Trang “Chúng tôi” 
Code html: 
13 
Code css: 
4.2.3 Trang “Vi vu” (sản phẩm webgis của nhóm – đây là nhiệm cụ của em trong dự  
án web TraveWebgis) 
Code html giao diện web: 
Code CSS:  
Tại trang web này, sử dụng Leaflet để hiển thị bản đồ, GeoServer để cung cấp dịch vụ bản 
đồ và dữ liệu địa lý, và PHP để xử lý tìm kiếm và chỉ đường. PostgreSQL là cơ sở dữ liệu 
lưu trữ thông tin về các địa danh. Các file tương tác với nhau để cung cấp các chức năng 
như hiển thị bản đồ, tìm kiếm địa danh và chỉ đường. Cụ thể phân xử lý các logic sẽ có 3 
file chính tương tác để xử lý yêu cầu, bao gồm: “app.js”, “seach_tourisms_in_area.php”, 
“get_direction.php”. 
Các công cụ và dịch vụ được sử dụng: 
o PostgreSQL + PDO: Truy vấn dữ liệu địa điểm từ cơ sở dữ liệu. 
o Nominatim API: Tìm kiếm địa danh và xác định vùng bounding box. 
o Fetch API: Giao tiếp giữa client và server để gửi yêu cầu tìm kiếm và nhận kết quả. 
o Leaflet.js: Hiển thị bản đồ, marker, và popup thông tin địa điểm. 
o OpenRouteService API: Tìm đường đi giữa các điểm dựa trên tọa độ. 
Tương tác giữa các file: - - 
app.js: Làm việc ở phía client để quản lý bản đồ, tương tác với các dịch vụ 
GeoServer, gửi yêu cầu tìm kiếm và chỉ đường đến server. 
search_tourisms_in_area.php: Xử lý các yêu cầu tìm kiếm từ app.js, truy vấn cơ 
sở dữ liệu và trả về kết quả. 
15 
- 
get_directions.php: Xử lý các yêu cầu chỉ đường từ app.js, gọi API 
OpenRouteService và trả về kết quả chỉ đường. 
4.2.3.1. File app.js 
➢ Tổng quan: - 
Quản lý hiển thị bản đồ và các lớp overlay. - - - 
Fetch dữ liệu từ GeoServer và hiển thị các marker. 
Xử lý tìm kiếm và hiển thị kết quả trên bản đồ. 
Cung cấp chức năng chỉ đường giữa các điểm. 
➢ Chi tiết 
➔ Khởi tạo lớp bản đồ nền và điều khiển bản đồ: 
16 
➔ Thêm lớp wms (lớp layer điểm) và các marker từ geoserver 
➔ Xử lý sự kiện nhấp chuột để thực hiện GetFeatureInfo 
Hàm getFeatureInfoUrl tạo URL để yêu cầu thông tin chi tiết từ một điểm trên bản 
đồ thông qua dịch vụ WMS (Web Map Service): 
17 
Sự kiện nhấp chuột: Khi người dùng nhấp chuột vào bản đồ, sự kiện click được 
kích hoạt. Sự kiện này gọi hàm getFeatureInfoUrl để tạo URL cho yêu cầu 
GetFeatureInfo. 
Hàm getFeatureInfoUrl: Hàm này tạo URL yêu cầu GetFeatureInfo từ GeoServer 
dựa trên thông tin về bản đồ, lớp WMS (wmsLayer), tọa độ nhấp chuột (latlng), và 
các tham số bổ sung (params). URL này chứa tất cả các tham số cần thiết để 
GeoServer hiểu và trả về thông tin về đối tượng tại vị trí nhấp chuột. 
Gửi yêu cầu và xử lý phản hồi: URL được tạo bởi getFeatureInfoUrl được sử dụng 
trong một yêu cầu fetch để lấy dữ liệu từ GeoServer. Khi phản hồi được trả về, nó 
được chuyển đổi thành JSON và kiểm tra xem có bất kỳ đối tượng nào không 
(data.features.length > 0). Nếu có đối tượng, thông tin về đối tượng đó được hiển thị 
trong một popup trên bản đồ tại vị trí nhấp chuột. 
➔ Tìm kiếm các địa điểm (nhà hàng, khách sạn, điểm du lịch,…) trong khu vực 
được khách hàng nhập vào thanh tìm kiếm: 
18 
Hàm seachLocation sẽ thực hiện fetch dến search_tourisms_in_area.php để lấy dữ 
liệu và hiển thị kết quả. Chỉ đường đi nếu khách hàng chọn nút đường đi: Khi 
người dùng nhấp vào nút "Đường đi" trong kết quả tìm kiếm, chương trình sẽ tính 
19 
toán và hiển thị chỉ đường từ vị trí hiện tại của người dùng đến địa điểm được chọn 
trên bản đồ. 
4.2.3.2. File ‘search_tourisms_in_area.php’ 
➢ Tổng quan: 
o Nhận yêu cầu tìm kiếm địa danh từ app.js. 
o Gửi yêu cầu đến API Nominatim của OpenStreetMap để lấy bounding box 
(hộp bao) của địa điểm tìm kiếm. 
o Sau đó sử dụng bounding box này để truy vấn cơ sở dữ liệu 
PostgreSQL/PostGIS để lấy danh sách các địa điểm Trả về kết quả tìm kiếm 
dưới dạng JSON. 
o Kết nối đến cơ sở dữ liệu PostgreSQL để tìm kiếm các địa danh trong khu 
vực được chỉ định. 
➢ Chi tiết: 
➔ Kết nối đến cơ sở dữ liệu 
➔ Nhận tham số từ Get request (từ app.js) và gửi yêu cầu đến API Nomination 
➔ Truy vấn cơ sở dữ liệu với bounding box 
20 
Bounding box: Lấy bounding box từ kết quả Nominatim để giới hạn phạm vi tìm 
kiếm. 
ST_Within: Hàm PostGIS để kiểm tra xem đối tượng có nằm trong bounding box 
không. 
Truy vấn cơ sở dữ liệu: Thực hiện truy vấn để lấy danh sách các địa điểm du lịch 
trong bounding box và trả về kết quả dưới dạng JSON. 
4.2.3.3. File ‘get_directions.php’ 
➢ Tổng quan: 
o Nhận yêu cầu chỉ đường từ app.js. 
o Gọi đến API OpenRouteService để lấy chỉ đường và trả về kết quả. 
➢ Chi tiết: 
➔ Nhận tham số từ URL từ yêu cầu của app.js 
21 
➔ Thiết lập API keu và URL: Đoạn mã thiết lập API key của dịch vụ 
OpenRouteService và tạo URL yêu cầu dịch vụ điều hướng, bao gồm tọa độ điểm 
bắt đầu và kết thúc. 
➔ Gửi yêu cầu đến API OpenRouteService và trả về kết quả: 
4.2.4 Trang “liên hệ” 
Code html: 
Code CSS: 
22 
Đây là trang liên hệ của TravelWebgis, cho phép người dùng gửi thông tin liên hệ của họ. 
Nó kết nối đến cơ sở dữ liệu PostgreSQL để lưu trữ dữ liệu form được gửi bởi người dùng. 
Mã PHP kiểm tra tính hợp lệ của các trường nhập vào (tên, email, số điện thoại, tin nhắn) 
và chèn dữ liệu hợp lệ vào bảng contact_info. Nếu có lỗi xảy ra trong quá trình kết nối cơ 
sở dữ liệu hoặc thực hiện truy vấn, thông báo lỗi sẽ được hiển thị. Giao diện người dùng 
bao gồm một form liên hệ và hiển thị thông tin liên hệ của TravelWebgis, đồng thời xử lý 
và hiển thị thông báo về kết quả gửi form. 
Ở phần này nhóm sử dung file “contactDB”, với nhiệm vụ cụ thể như sau: 
➔ Kết nối cơ sở dữ liệu 
23 
➔ Xử lý form, gửi form và in ra thông báo 
Lấy thông tin từ form sau đó sẽ kiểm tra tính hợp lệ nếu không hợp lệ thì sẽ in ra 
thông báo, còn hợp lệ thì sẽ gửi dữ liệu đó đến cơ sở dữ liệu đã kết nối sẳn (cụ thể 
là chèn dữ liệu vào bảng “contact_info” trong cơ sở dữ liệu và thiết lập thông báo 
thành công. 
24 
4.3 Quá trình thực hiện  
Bước 1: Tải dữ liệu địa điểm  (lấy dữ liệu từ trang overpass API - Overpass Turbo là một 
dịch vụ của Overpass API, được phát triển và duy trì bởi cộng đồng OpenStreetMap (OSM)) 
Bước 2: Khởi chạy Tomcat và apache tại “XAMPP control panel” → khởi chạy Geoserver 
(localhost:8080/geoserver) → đăng nhập sẽ có giao diện như hình dưới: 
Bước 3: Tạo lớp layer địa điểm từ dữ liệu được tải ở Bước 1: 
➢ Tạo workspace 
25 
➢ Tạo Store từ workspace và layer 
Bươc 3: Tạo cơ sở dữ liệu lưu trữ điểm 
(dùng cho truy vấn) và thông tin cho 
trang liên hệ 
➢ Bảng contact_infor (lưu trữ thông tin được gửi từ khách hàng): 
➢ Bảng Travel (sử dụng PostGis để tải file dữ liệu điểm lên) 
26 
Bước 4: Lấy API của dịch vụ Openrouteservice dùng cho dịch vụ chỉ đường 
Bước 5: Triển khai code trên visual Studio code như ở mục 4.2 (giao diện và 
backend) 
Bước 6: Khởi động Apache, tomcat và tùy chỉnh 
27 
5. KẾT QUẢ ĐẠT ĐƯỢC 
5.1 Trang chủ 
5.2 Trang “Chúng tôi” 
28 
5.3.  Trang “Vi vu” (sản phẩm webgis của nhóm) 
5.3.1 Giao diện lúc đầu 
29 
5.3.2 Tính năng tùy chỉnh 
Xem bằng 2 loại bảng đồ, chế độ bật tắt landmark và layer điểm 
5.3.3 Chức năng tìm kiếm địa điểm (nhà hàng, khách sạn và địa điểm du lịch bất kỳ) 
Nhập thử 1 địa điểm (vd: Hồ Chí Minh) và kết quả đạt được 
Khi chọn tính năng tải thêm, web sẽ trả ra thêm các địa điểm khác. Khi chọn “đường 
đi” thì sẽ dẫn đường, kết quả: 
30 
5.3.4 Chức năng GetFeatureInfor 
31 
5.4 Trang “Liên hệ” 
5.4.1 Giao diện 
5.4.2 Nhập thông tin và kết quả tại cơ sở dữ liệu 
➢ Nhập thông tin  
32 
➢ In ra thông báo khi thành công 
➢ Kết quả tại cơ sở dữ liệu 
6. ĐÁNH GIÁ KẾT QUẢ ĐẠT 
Kết quả trang web “TravelWebgis” đạt được đúng với mục tiêu ban đầu. Các chức năng 
của trang web đều hoạt động tốt và đúng quy trình đề ra. Tuy nhiên, dự án còn có nhiều 
điểm hạn chế về một số khía cạnh: 
➢ Dữ liệu:  
o Phạm vi mà dữ liệu đề ra chỉ trong khu vực Hồ Chí Minh và một số tỉnh lân 
cận. 
o Thông tin về các địa điểm còn thô sơ, chỉ bao gồm loại hình và địa điểm vị 
trí 
➢ Trang web: 
o Trang web có giao diện khá đơn giản và không cung cấp nhiều tính năng 
o Phần trang “vi vu” chỉ có chế độ tìm theo tên mà không có việc lọc theo tính 
năng làm việc truy vấn chứ sát được mong muốn của người sử dụng 
33 
7. KẾT LUẬN 
Trong bối cảnh phát triển mạnh mẽ của công nghệ thông tin và nhu cầu ngày càng tăng của 
người dùng, việc xây dựng một hệ thống web tìm kiếm địa điểm (nhà hàng, khách sạn và 
địa điểm du lịch) đã trở thành một công cụ hữu ích và cần thiết. Đồ án này đã trình bày quy 
trình thiết kế và phát triển một ứng dụng web, sử dụng các công nghệ HTML, CSS, 
JavaScript và PHP, kết hợp với các dịch vụ bản đồ như Leaflet và API của OpenStreetMap 
và cơ sở dữ liệu PostGresql. 
Thông qua việc triển khai các chức năng tìm kiếm và hiển thị thông tin chi tiết về các địa 
điểm, người dùng có thể dễ dàng tìm thấy những nơi phù hợp với nhu cầu của họ một cách 
nhanh chóng và chính xác. Bên cạnh đó, tính năng điều hướng giúp người dùng lên kế 
hoạch di chuyển một cách thuận tiện hơn, góp phần nâng cao trải nghiệm du lịch và khám 
phá. 
Kết quả của đồ án không chỉ là một sản phẩm phần mềm hoàn chỉnh mà còn là một nền 
tảng kiến thức vững chắc về cách thức xây dựng và tích hợp các hệ thống webgis Điều này 
mở ra nhiều hướng phát triển và ứng dụng trong tương lai, không chỉ giới hạn ở lĩnh vực 
du lịch mà còn có thể mở rộng sang nhiều lĩnh vực khác như bất động sản, giáo dục và 
nhiều ngành công nghiệp dịch vụ khác. 
Qua quá trình thực hiện đồ án, nhóm đã rút ra nhiều bài học quý giá về lập trình, quản lý 
dự án và làm việc nhóm. Những kinh nghiệm này sẽ là hành trang hữu ích cho các dự án 
công nghệ trong tương lai.  
