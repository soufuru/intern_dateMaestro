<main role="main" class="probootstrap-main js-probootstrap-main">
    <h1>投稿</h1>
    <?=$this->Form->create($plan) ?>
    <?=$this->Form->input('name',['type' => 'text']) ?>

    <?php for ($i = 0; $i < 2; ++$i): ?>
        <?= $this->Form->input("spots.$i.place"); ?>
        <?= $this->Form->input("spots.$i.start_time"); ?>
    <?php endfor; ?>

    <div id="insertArea">
    </div>

    <div>
        <button onclick="add();" type="button">追加</button>
    </div>


    <?= $this->Form->input('comment') ?>
    <?=$this->Form->submit('投稿')?>
    <?=$this->Form->end()?>
</main>

<script>
    function add() {
        var elements = document.getElementsByTagName('textarea');
        var div_element = document.createElement("div");
        div_element.innerHTML =
            '<div class="input textarea required">' +
            '<label for=' + "spots-" + (elements.length-1) + "-place" + '>Place</label>' +
            '<textarea name=' + "spots[" + (elements.length-1) + "][place]" + 'required="required" id= '+ "spots-"+ (elements.length-1) +"-place" +' rows="5">' + '</textarea>' +
            '<div class="input time">' +
                '<label>Start Time</label>' +
                '<select name=' + "spots[" + (elements.length-1) + "][start_time][hour]" + '><option value="00">0</option>' +
                    '<option value="01">1</option>' +
                    '<option value="02">2</option>' +
                    '<option value="03">3</option>' +
                    '<option value="04">4</option>' +
                    '<option value="05">5</option>' +
                    '<option value="06">6</option>' +
                    '<option value="07" selected="selected">7</option>' +
                    '<option value="08">8</option>' +
                    '<option value="09">9</option>' +
                    '<option value="10">10</option>' +
                    '<option value="11">11</option>' +
                    '<option value="12">12</option>' +
                    '<option value="13">13</option>' +
                    '<option value="14">14</option>' +
                    '<option value="15">15</option>' +
                    '<option value="16">16</option>' +
                    '<option value="17">17</option>' +
                    '<option value="18">18</option>' +
                    '<option value="19">19</option>' +
                    '<option value="20">20</option>' +
                    '<option value="21">21</option>' +
                    '<option value="22">22</option>' +
                    '<option value="23">23</option></select><select name=' + "spots["+ (elements.length-1) +"][start_time][minute]"+'><option value="00">00</option>' +
                    '<option value="01">01</option>' +
                    '<option value="02">02</option>' +
                    '<option value="03">03</option>' +
                    '<option value="04">04</option>' +
                    '<option value="05">05</option>' +
                    '<option value="06">06</option>' +
                    '<option value="07">07</option>' +
                    '<option value="08" selected="selected">08</option>' +
                    '<option value="09">09</option>' +
                    '<option value="10">10</option>' +
                    '<option value="11">11</option>' +
                    '<option value="12">12</option>' +
                    '<option value="13">13</option>' +
                    '<option value="14">14</option>' +
                    '<option value="15">15</option>' +
                    '<option value="16">16</option>' +
                    '<option value="17">17</option>' +
                    '<option value="18">18</option>' +
                    '<option value="19">19</option>' +
                    '<option value="20">20</option>' +
                    '<option value="21">21</option>' +
                    '<option value="22">22</option>' +
                    '<option value="23">23</option>' +
                    '<option value="24">24</option>' +
                    '<option value="25">25</option>' +
                    '<option value="26">26</option>' +
                    '<option value="27">27</option>' +
                    '<option value="28">28</option>' +
                    '<option value="29">29</option>' +
                    '<option value="30">30</option>' +
                    '<option value="31">31</option>' +
                    '<option value="32">32</option>' +
                    '<option value="33">33</option>' +
                    '<option value="34">34</option>' +
                    '<option value="35">35</option>' +
                    '<option value="36">36</option>' +
                    '<option value="37">37</option>' +
                    '<option value="38">38</option>' +
                    '<option value="39">39</option>' +
                    '<option value="40">40</option>' +
                    '<option value="41">41</option>' +
                    '<option value="42">42</option>' +
                    '<option value="43">43</option>' +
                    '<option value="44">44</option>' +
                    '<option value="45">45</option>' +
                    '<option value="46">46</option>' +
                    '<option value="47">47</option>' +
                    '<option value="48">48</option>' +
                    '<option value="49">49</option>' +
                    '<option value="50">50</option>' +
                    '<option value="51">51</option>' +
                    '<option value="52">52</option>' +
                    '<option value="53">53</option>' +
                    '<option value="54">54</option>' +
                    '<option value="55">55</option>' +
                    '<option value="56">56</option>' +
                    '<option value="57">57</option>' +
                    '<option value="58">58</option>' +
                    '<option value="59">59</option></select></div>'
            '</div>';
        var parent_object = document.getElementById("insertArea");
        parent_object.appendChild(div_element);
    }
</script>
