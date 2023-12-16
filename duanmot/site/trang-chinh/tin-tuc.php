<style>
    body {
        margin: 0 auto;
        max-width: 1200px;
        padding: 0px;
    }


    h1 {
        text-align: center;
        color: #333;
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(20%, 1fr));
        gap: 10px;
        margin-top: 30px;
    }

    .news-item {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 5px;
        padding: 32px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .news-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .news-item img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .news-title {
        font-size: 20px;
        color: #333;
        margin-bottom: 10px;
        width: 100%;
    }

    .news-description {
        flex-grow: 1;
        margin-bottom: 10px;
        width: 100%;
    }

    .news-date {
        color: #888;
        font-style: italic;
        width: 100%;
    }

    .news-link {
        color: #4CAF50;
        font-weight: bold;
        text-decoration: none;
        width: 100%;
    }

    .news-link:hover {
        text-decoration: underline;
    }
</style>
<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="?pages=trang-chinh&action=trang-chu">Trang chủ</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tin Tức</strong></div>
            </div>
        </div>
    </div>
    <h1>Tin tức</h1>
    <div class="row mb-5">
        <div class="news-grid">
            <div class="news-item">
                <img src="\content\images\anh2.jpg" alt="Hình ảnh tin tức">
                <div class="news-content">
                    <h2 class="news-title">Xuất bản điện tử: 10 năm vẫn rối</h2>
                    <p class="news-description">Sau 10 năm thi hành Luật Xuất bản (năm 2012), nhiều vấn đề tưởng như “biết rồi, khổ lắm” nhưng vẫn phải “nói mãi”. Một trong số đó là câu chuyện xuất bản phẩm điện tử.</p>
                    <p class="news-date">Ngày đăng: 01/01/2023</p>
                    <a href="https://viettimes.vn/xuat-ban-dien-tu-10-nam-van-roi-post159601.html" class="news-link">Đọc thêm</a>
                </div>
            </div>

            <div class="news-item">
                <img src="\content\images\anh3.jpg" alt="Hình ảnh tin tức">
                <div class="news-content">
                    <h2 class="news-title">“Lục Vân Tiên và những luận đề về Nguyễn Đình Chiểu” - truyện thơ Nôm mang giá trị nghệ thuật cao</h2>
                    <p class="news-description">VietTimes - Cuốn “Lục Vân Tiên và những luận đề về Nguyễn Đình Chiểu” vừa được NXB Trẻ giới thiệu nhân kỷ niệm 200 năm ngày sinh "cụ đồ Chiểu", với mong muốn ấn bản thật gần với nguyên tác.</p>
                    <p class="news-date">Ngày đăng: 02/01/2023</p>
                    <a href="#" class="news-link">Đọc thêm</a>
                </div>
            </div>
            <div class="news-item">
                <img src="\content\images\anh4.jpeg" alt="Hình ảnh tin tức">
                <div class="news-content">
                    <h2 class="news-title">“Rỗng” - Tuyển tập thi họa chứa đầy triết lý tìm về “Tánh Không”</h2>
                    <p class="news-description">VietTimes - Đạo diễn Đoàn Quang Anh Khanh, sau 15 năm rời xa showbiz Việt, vừa xuất hiện, giới thiệu tuyển tập thi họa “Rỗng” chứa đầy triết lý tìm về “Tánh Không”.</p>
                    <p class="news-date">Ngày đăng: 02/01/2023</p>
                    <a href="#" class="news-link">Đọc thêm</a>
                </div>
            </div>
            <div class="news-item">
                <img src="\content\images\anh5.jpg" alt="Hình ảnh tin tức">
                <div class="news-content">
                    <h2 class="news-title">Hồ Anh Thái trở lại với “Đức Phật, nữ chúa và điệp viên”</h2>
                    <p class="news-description">VietTimes - Nhà văn của "Tiếng thở dài qua rừng kim tước" Hồ Anh Thái vừa trở lại với độc giả cùng ấn phẩm mới "Đức Phật, nữ chúa và điệp viên". </p>
                    <p class="news-date">Ngày đăng: 02/01/2023</p>
                    <a href="https://viettimes.vn/ho-anh-thai-tro-lai-voi-duc-phat-nu-chua-va-diep-vien-post156304.html#156304|zone-timeline-162|3" class="news-link">Đọc thêm</a>
                </div>
            </div>
        </div>
    </div>