<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['User_ID']); ?>
	<table>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><input type="text" name="name" rows="10" cols="40"><?php echo $news_item['name'] ?></input></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><input type="text" name="nName" rows="10" cols="40"><?php echo $news_item['nName'] ?></input></td>
        </tr>
		<tr>
            <td><label for="Email">Email</label></td>
            <td><input type="text" name="email" rows="10" cols="40"><?php echo $news_item['email'] ?></input></td>
        </tr>
		<tr>
            <td><label for="Home_Address">Home Address</label></td>
            <td><input type="text" name="hAd" rows="10" cols="40"><?php echo $news_item['hAd'] ?></input></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><input type="text" name="gender" rows="10" cols="40"><?php echo $news_item['gender'] ?></input></td>
        </tr>
		<tr>
            <td><label for="Cp_Num">Cellphone number</label></td>
            <td><input type="text" name="cNum" rows="10" cols="40"><?php echo $news_item['cNum'] ?></input></td>
        </tr>
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><input type="text" name="message" rows="10" cols="40"><?php echo $news_item['message'] ?></input></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
