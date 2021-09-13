                                <div class="comments-area">
                                    <div class="comments-section">
                                        <h3 class="comments-title"><?php if(get_comments_number()): echo('Posts Comments');  endif;?></h3>
                                        <ol class="comments">
                                        <?php
                wp_list_comments( array(
                    'style'       => 'li',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
                                        </ol>
                                        <?php  paginate_comments_links()?>
                                    </div> <!-- end comments-section -->

                                </div>

                                <div class="comment-respond">
                                            <?php //Declare Vars
$comment_send = 'Send';
$comment_reply = 'Write a Comment';
$comment_reply_to = 'Reply';
 
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Comment';
$comment_url = 'Website';
$comment_cancel = 'Cancel Reply';
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'url' => '<div class="form-inputs"><input placeholder="' . $comment_url .'"  id="url" name="url">',
        
        'author' => '<input name="author" aria-required="true" placeholder="' . $comment_author .'" id="author" type="text">',
        //Email Field
        'email' => '<input id="email" name="email" placeholder="' . $comment_email .'"></div>',
        //URL Field
        ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<div class="form-textarea">
                        <textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea>
                        </div>'
    ,
    //Message Before Comment
    'comment_notes_before' => __( $comment_before),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
);
comment_form( $comments_args );?>
                                    </div>