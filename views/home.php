<div class="container">
    <div class="page-header">Let's Start Sorting</div>
    <form action="?page=sort&algorithm=merge" method="post">
        <div class="input-box">
            <label for="user_input">Enter String:</label>
            <input type="text" id="user_input" name="data" placeholder="e.g: cab" autocomplete="off">
        </div>
        <div class="input-box">
            <label for="" class="user_algorithm">Select Sort Algorithm</label>
            <select name="sort-by" id="user_algorithm">
                <option value="merge">Merge Sort</option>
                <option value="quick">Quick Sort</option>
            </select>
        </div>
        <div class="input-box">
            <button type="submit" name="submit" class="user_submit">SORT</button>
        </div>
    </form>
</div>