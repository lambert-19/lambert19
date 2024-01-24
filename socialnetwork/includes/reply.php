    <button class="open-button" onclick="openForm()">Reply</button>

       <div class="form-popup" id="myForm">
            <form method="post" action="" onsubmit="return validatePost1()" enctype="multipart/form-data" class="form-container">
                
                <div>   
                    <textarea name="comment_textbox" name = "content_reply"  maxlength="150" rows="2" cols="60" placeholder="add comment"></textarea>
                 </div>
                <div>
                    <button type="submit" class="btn">Reply</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </div>
               
               
            </form>
       </div>