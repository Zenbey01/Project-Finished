<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/headers.css">
    <link rel="stylesheet" href="CSS/carousel.css">
    <link rel="stylesheet" href="CSS/under.css">
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
    <img src="Photo/Asiatiqe.png" alt="เว็บไซต์ตัวอย่าง" style="display: block; margin: auto; width: 30%; max-width: 300px; height: auto;">
        <header class="py-3">
                <ul class="nav-pills">
                <a href="index.php">หน้าแรก</a>
                  <a href="Location information.html">ข้อมูลสถานที่ท่องเที่ยว</a>
                  <a href="about.html">เกี่ยวกับ</a>
                </ul>
                
                
                
        
        
        </header>
        
    </div>
    
    <main>
      <div class="slideshow-container">

        <div class="mySlides fade">
          
          <img src="Photo/top1.png" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          
          <img src="Photo/top2.png" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          
          <img src="Photo/top3.png" style="width:100%">
          
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        
      
        <div class="text">
        <h1 class="textasiatiqe" style="font-weight: normal;">แผนที่แสดงเอเชียทีค เดอะ ริเวอร์ฟร้อนท์</h1>
        </div>
        <div class="container">
            <div class="map-asiatique">
                <img src="Photo/Deatest.png" alt="Your Image" class="left-image">
                <div class="right-boxes">
                    <div class="box box1">
                    <h3 style="font-weight: normal;">เลือกวิธีการไป-กลับ</h3>
                        <br>
                        <form action="" method="post">
                            <label for="topic" style="font-family: Sriracha, cursive; font-weight: normal;">เลือกวิธีการไป</label>
                            <select name="topic" id="topic">
                                <option value="">Select...</option>
                                <?php include 'get_topics.php'; ?>
                            </select>
                        </form>
                        <br>
                    </div>
                    <br>
                    <div class="box box2">
                        <h3 style="font-weight: normal;">เลือกสถานที่</h3>
                        <br>
                        <form action="" method="post">
                            <label for="subtopic" style="font-family: Sriracha, cursive; font-weight: normal;">เลือกจำนวนสถานที่</label>
                            <select name="subtopic" id="subtopic">
                                <option value="">Select...</option>
                                
                            </select>
                            <br>
                            <br>
                                               
                            
                        </form>
                        <button type="button"  class="button" onclick="submitsubtopic()"><h4 style="font-family: Sriracha, cursive; font-weight: normal;">ยืนยัน</h4></button>
                        
                    </div>
                    
                </div>
            </div>
        </div>
            <div id="id01" class="modal">
                <!-- <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span> -->
                <div class="modal-content">
                 <!-- โค้ด PHP ที่สร้างขึ้นมาแสดงรูปภาพและลิงค์ -->
                 <div id="result"></div>
    </div>
            </div>
                
                <div id="id02" class="modal">
                <!-- <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span> -->
                <form class="modal-content-star" >
                    <div class="container-qqq">
                    
                    <h1 class="textreview">โปรดให้คะแนนความพึงพอใจ</h1>
                    <button type="button" class="btnNextgo-on" onclick="document.getElementById('id03').style.display='block'; document.getElementById('id02').style.display='none'">ต่อไป</button>

                    </div>
                </form>
                </div>

                <div id="id03" class="modal">
                <!-- <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span> -->
                    <div class="modal-content-star" >
                        <div class="container-qqq">
                            <img id="ratingImage" src="Photo/satar3.png" style="display: block; width: 20%; height: auto;">
                            <h1 class="textreview-css">เลือกคะแนนความพึงพอใจ</h1>
                            <div class="rating-css">
                                <div class="star-icon">
                                    <input type="radio" name="rating" id="rating1" value="1" onclick="changeRatingImage(1)">
                                    <label for="rating1" class="fa fa-star"></label>

                                    <input type="radio" name="rating" id="rating2" value="2" onclick="changeRatingImage(2)">
                                    <label for="rating2" class="fa fa-star"></label>

                                    <input type="radio" name="rating" id="rating3" value="3" checked onclick="changeRatingImage(3)">
                                    <label for="rating3" class="fa fa-star"></label>

                                    <input type="radio" name="rating" id="rating4" value="4" onclick="changeRatingImage(4)">
                                    <label for="rating4" class="fa fa-star"></label>

                                    <input type="radio" name="rating" id="rating5" value="5" onclick="changeRatingImage(5)">
                                    <label for="rating5" class="fa fa-star"></label>
                                </div>
                            </div>
                            <button type="button" class="btnNextgo-on" onclick="document.getElementById('id03').style.display='none'; submitRating();">ต่อไป</button>
                        </div>
                    </div>
                </div>
            
                <div id="id04" class="modal">
                    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <div class="modal-content-star">
                        <div class="container-qqq">
                            <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <img id="imageToDownload" src="Photo/YESYESS.png" alt="Your Image" class="YESYES-image">

                            <h1 class="textreview-finish">เสร็จสิ้น</h1>
                            <h3 class="text-h3">ขอบคุณสำหรับคะแนนความพึงพอใจ</h3>

                        </div>
                    </div>
                </div>
                
                <div id="id05" class="modal">
                    <span onclick="document.getElementById('id05').style.display='none'" class="close2" title="Close Modal">&times;</span>
                    <div class="modal-content">
                        <div class='gallery-item'>
                            <img src="Photo/howto.png" class="gallery-image" style ="max-width: 100%; max-height: 100%;" alt="Image">
                            <br>
                            <button type="button" class="btnNextgo-on" onclick="document.getElementById('id05').style.display='none'">ปิดวิธีการใช้งาน</button>
                        </div>
                        
                    </div>
                </div>


    </main>

    <br>
    <footer>
      <p>©2024 WWW.TEST.COM. ALL RIGHTS RESERVED.</p>
    </footer>
    <a href="#" class="back-to-top">
        <span class="material-icons">&#8657;</span>
    </a>
    <a class="how-to-play">
    <span class="material-icons"  onclick="document.getElementById('id05').style.display='block'; document.getElementById('id02').style.display='none'">วิธีใช้</span>
    </a>
    
    <script>
    const topicSelect = document.getElementById("topic");
    const subtopicSelect = document.getElementById("subtopic");
    
    //ดึงข้อมูล subtopic จากไฟล์ get_subtopic.php โดยใช้ method GET และส่ง parameter gate_ID ที่มีค่าเท่ากับ topicId ซึ่งเป็น ID ของ topic ที่ถูกเลือก หลังจากนั้นจะนำข้อมูล subtopic ที่ได้มาใส่ใน
    function fetchSubtopics(topicId, ...subtopicDropdowns) {
        const promises = subtopicDropdowns.map((subtopicDropdown) => {
            return fetch(`get_subtopic.php?gate_ID=${topicId}`)
                .then(response => response.json())
                .then(subtopics => {
                    // ล้างตัวเลือกที่มีอยู่
                    subtopicDropdown.innerHTML = "<option value=''>Select...</option>";

                    // เติมตัวเลือกใหม่
                    subtopics.forEach(subtopic => {
                        const option = document.createElement("option");
                        option.value = subtopic.id;
                        option.textContent = subtopic.name;
                        subtopicDropdown.appendChild(option);
                    });
                });
        });
        //รับค่าเป็นอาร์เรย์ของผลลัพธ์ที่ถูก resolve ของ Promise แต่ละตัวในอาร์เรย์ promises ซึ่งในที่นี้คือการสร้าง dropdown ใหม่ของ subtopic 
        return Promise.all(promises);
    }

  
    //ใช้สำหรับจัดการเมื่อมีการเปลี่ยนแปลงใน dropdown ที่เลือก topic เกิดขึ้น โดยฟังก์ชันจะดึงค่า id ของ topic ที่ถูกเลือกจาก dropdown และส่งค่า id นี้ไปยังฟังก์ชัน fetchSubtopics() พร้อมกับ dropdown ที่ใช้สำหรับเลือก subtopic
    function handleTopicChange() {
        const topicId = topicSelect.value;

        fetchSubtopics(topicId, subtopicSelect);
    }
    //ใช้สำหรับจัดการเมื่อมีการเปลี่ยนแปลงใน dropdown ที่ใช้เลือก subtopic
    function handleImageGalleryChange() {
        const topicId = topicSelect.value;
        const subtopicId = subtopicSelect.value;

        fetchImages(topicId, subtopicId);
    }

    // ติดตั้งการฟังก์ชันให้ฟังก์ชันทำงานเมื่อมีการเปลี่ยนแปลงใน dropdown
    topicSelect.addEventListener("change", handleTopicChange);

    // เรียกใช้ฟังก์ชันเพื่อดึง subtopic ตั้งต้นที่สัมพันธ์กับหัวข้อที่ถูกเลือกครั้งแรก
    const initialTopicId = topicSelect.value;
    fetchSubtopics(initialTopicId, subtopicSelect);

    
    

</script>

 <script src="JS/script.js"></script>

</body>
</html>