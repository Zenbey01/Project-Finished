// ฟังก์ชันแสดงสไลด์
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



function submitRating() {
  // รับค่าคะแนนที่ผู้ใช้เลือก
  var selectedRating = document.querySelector('input[name="rating"]:checked');

  if (selectedRating) {  //if ส่งดาวให้ฉัน
      // ส่งคะแนนไปยัง PHP ผ่านทาง Ajax
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
              // ทำอะไรบางอย่างหลังจากส่งคะแนนเรียบร้อยแล้ว
              console.log("ส่งคะแนนเรียบร้อย!");
              // เปิดหน้าต่าง modal ถัดไป
              document.getElementById('id04').style.display='block';
              document.getElementById('id03').style.display='none';
          }
      };

      // ระบุ URL ของสคริปต์ PHP ที่จะรับคะแนน
      xhr.open("POST", "submitRating.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
      // ส่งคะแนนไปพร้อมกับคำร้องขอ
      xhr.send("rating=" + selectedRating.value);
  } else {
      alert("กรุณาเลือกคะแนน!");
  }
}


//ส่งค่า ปยัง PHP ผ่านทาง Ajax
function submitsubtopic() {
  // รับค่า subtopic ที่ผู้ใช้เลือก
  var selectedSubtopic = document.getElementById('subtopic');
  var subtopicValue = selectedSubtopic.value;

  if (subtopicValue) {
      // ส่งค่า subtopic ไปยัง PHP ผ่านทาง Ajax
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
              // ทำอะไรบางอย่างหลังจากส่งค่า subtopic เรียบร้อยแล้ว
              console.log("ส่งค่า subtopic เรียบร้อย!");
              // เปิดหน้าต่าง modal ถัดไป
              document.getElementById('id01').style.display='block';
              document.getElementById('id02').style.display='none';

              // แสดงผลลัพธ์ที่ได้จากการรับค่า subtopic ที่ display_images.php
              document.getElementById('result').innerHTML = xhr.responseText;
          }
      };

      // ระบุ URL ของสคริปต์ PHP ที่จะรับค่า subtopic
      xhr.open("POST", "display_images.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
      // ส่งค่า subtopic ไปพร้อมกับคำร้องขอ
      xhr.send("subtopic=" + subtopicValue);
  } else {
      alert("กรุณาเลือก จำนวนสถานที่");
  }
}


    //เปลี่ยนหน้ายิ้ม
    function changeRatingImage(value) {
        var image = document.getElementById("ratingImage");
        switch (value) {
            case 1:
                image.src = "Photo/satar1.png";
                break;
            case 2:
                image.src = "Photo/satar2.png";
                break;
            case 3:
                image.src = "Photo/satar3.png";
                break;
            case 4:
                image.src = "Photo/satar4.png";
                break;
            case 5:
                image.src = "Photo/satar5.png";
                break;
            default:
                image.src = "Photo/satar1.png"; // หากไม่มีการเลือกค่าใดๆ ให้ใช้รูปภาพค่าเริ่มต้น
                break;
        }
        

    }







