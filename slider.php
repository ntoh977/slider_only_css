<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("button").click(function() {
            $("p").html("Hello <b>world!</b>");
        });
    });
    </script>
</head>

<body>

    <div class='slider_two'>
        <div class="slider">
            <input type="radio" id="slide1" name="slide" checked>
            <input type="radio" id="slide2" name="slide">
            <input type="radio" id="slide3" name="slide">
            <input type="radio" id="slide4" name="slide">
            <div id="box">
                <div class="overflow">
                    <div class="slides">
                        <div class="slide slide1">
                            <h2>Slide1</h2>
                            <div class="img_"><img
                                    src="https://thumbs.dreamstime.com/z/beautiful-bikini-women-girls-beach-young-bikinis-diving-equipment-64535323.jpg"
                                    alt="Логотип MDN - изображение динозавра с текстом MDN web docs"></div>
                        </div>
                        <div class="slide slide2">
                            <h2>Slide2</h2>
                            <div class="img_"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7jqZZXBDJ8viypXY45QW5gPASaGElaEGmVQGUfnUYEgiaajxvE_-VkTQpMb034hoMQqI&usqp=CAU"
                                    alt="Логотип MDN - изображение динозавра с текстом MDN web docs"></div>
                        </div>
                        <div class="slide slide3">
                            <h2>Slide3</h2>
                        </div>
                        <div class="slide slide4">
                            <h2>Slide4</h2>
                        </div>
                    </div>
                </div>
            </div>



            <div class="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div>
    </div>
</body>

</html>
<style>
/* slider two */
.slider {
    margin: 5px auto;
    width: 600px;
    max-width: 100%;

}

.slider input {
    display: none;
}

.slide .img_ {
    height: 580px;
   width: 300px;
}

.slide img {
    height: 100%;
    width: 100%;
}

#box {
    background: #FFFFFF;
    border: 2px solid #989898;
}

.overflow {
    width: 100%;
    overflow: hidden;
}

#slide1:checked~#box .slides {
    margin-left: 0;
}

#slide2:checked~#box .slides {
    margin-left: -100%;
}

#slide3:checked~#box .slides {
    margin-left: -200%;
}

#slide4:checked~#box .slides {
    margin-left: -300%;
}



.slides {
    /*   display: flex; */
    width: 400%;
    height: 300px;
    transition: margin-left 0.8s cubic-bezier(0.770, 0.000, 0.175, 1.000);
}

.slide {
    /*   width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center; */
    width: 25%;
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    color: #989898;

}

.controls label {
    cursor: pointer;
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #E8E8E8;
    border-radius: 50%;
    border: 1px solid #989898;
}

.controls {
    width: 140px;
    display: flex;
    justify-content: space-between;
    margin: 10px auto;
}

#slide1:checked~.controls label:nth-child(1),
#slide2:checked~.controls label:nth-child(2),
#slide3:checked~.controls label:nth-child(3),
#slide4:checked~.controls label:nth-child(4) {
    background-color: #A2A2A2;
}

/* slider two */



<style>