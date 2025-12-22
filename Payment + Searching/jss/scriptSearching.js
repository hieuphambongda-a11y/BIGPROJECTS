const courses = [
    { id: 1, name: "Khóa học Toán học trực tuyến", author: "Huy Hùng", price: "1.299.000đ", subject: "Toán", time: "116h50p", remain: "590" },
    { id: 2, name: "Khóa học Ngữ văn trực tuyến", author: "Hoàng Dương", price: "Miễn phí", subject: "Văn", time: "49h34p", remain: "254" },
    { id: 3, name: "Khóa học Tiếng Anh trực tuyến", author: "Quang Hải", price: "299.000đ", subject: "Anh", time: "6h18p", remain: "27" }
];

const searchInput = document.getElementById('searchInput');
const suggestionsList = document.getElementById('suggestions');
const modal = document.getElementById('courseModal');
const modalData = document.getElementById('modalData');
const closeBtn = document.getElementById('closeBtn');

// Hàm tìm kiếm và hiển thị gợi ý ngay dưới thanh tìm kiếm
searchInput.addEventListener('input', function() {
    const value = this.value.trim().toLowerCase();
    suggestionsList.innerHTML = '';

    if (value.length > 0) {
        // Lọc các khóa học theo tên hoặc môn học
        const filtered = courses.filter(c => 
            c.name.toLowerCase().includes(value) || 
            c.subject.toLowerCase().includes(value)
        );

        if (filtered.length > 0) {
            filtered.forEach(course => {
                const li = document.createElement('li');
                li.textContent = course.name;
                li.onclick = () => showModal(course);
                suggestionsList.appendChild(li);
            });
            suggestionsList.classList.remove('hidden');
        } else {
            suggestionsList.classList.add('hidden');
        }
    } else {
        suggestionsList.classList.add('hidden');
    }
});

// Hàm hiển thị thông tin chi tiết
function showModal(course) {
    // 1. Đưa thông tin khóa học vào Modal như bình thường
    modalData.innerHTML = `
        <h2 style="color: #2563eb; margin-bottom: 20px;">${course.name}</h2>
        <p><strong>Môn học:</strong> ${course.subject}</p>
        <p><strong>Giảng viên:</strong> ${course.author}</p>
        <p><strong>Học phí:</strong> <span style="color: red">${course.price}</span></p>
        <p><strong>Thời lượng:</strong> ${course.time}</p>
        <p><strong>Số bài giảng:</strong> ${course.remain}</p>
    `;

    // 2. Hiển thị Modal và làm mờ nền
    modal.classList.remove('hidden');

    // 3. Ẩn danh sách gợi ý đi để nhìn màn hình cho sạch
    suggestionsList.classList.add('hidden'); 
    searchInput.value = '';

    /* LƯU Ý QUAN TRỌNG: 
       Để giữ lại chữ "t" (hoặc bất cứ gì người dùng đang gõ), 
       chúng ta KHÔNG viết dòng: searchInput.value = course.name;
       và cũng KHÔNG viết dòng: searchInput.value = '';
    */
}

// Khi bấm nút đóng (X)
closeBtn.onclick = () => {
    modal.classList.add('hidden');
};