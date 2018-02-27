<?php
/**
 * Front page template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Base_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			 <h1 class="center">Default styles</h1>
  
        <p>This page is a list of the default settings.</p>
  
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
  
        <hr>
        <p>a: Download at <a href="http://github.com" target="_blank">Github</a></p>
  
        <p>strong: <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong>.</p> 
  
        <p>em: <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
  
        <p>small: <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small><p>
  
        <p>del: <del>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</del><p>
  
        <p>ins: <ins>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</ins><p>    
        <p>sup: Lorem ipsum dolor<sup>12</sup> amet, consectetur adipisicing elit.</p>
  
        <p>sub: Lorem ipsum dolor<sub>34</sub> amet, consectetur adipisicing elit.</p>
  
        <p>abbr: <abbr title="HyperText Markup Language">HTML</abbr></p>
  
        <hr>
  
        <h4>Blockquote:</h4>
        <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae unde ad incidunt nihil. Recusandae quasi dolorum ducimus aperiam dolorem, placeat magnam, voluptatem necessitatibus cum eius asperiores laudantium sit ratione optio.</p> 
        <cite>Author Name</cite>
        </blockquote>
  
        <hr>
  
        <h4>Code</h4>
        <pre>
          <code>
            .code { 
              font-family: monospace;
              font-size: 1em;
              background-color: #666;
            }
          </code>
        </pre>
  
        <hr>
  
        <h4>List Items:</h4>
        <ul>
            <li>Item 1</li>
            <li>
              Item 2
              <ul>
                <li>Item 2.1</li>
                <li>Item 2.2</li>
              </ul>
            </li>
            <li>Item 3</li>
          </ul>
          
          <ol>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
          </ol>
  
          <hr>
  
        <h4>Tables:</h4>
        <table class="full-width">
            <thead>
              <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>56</td>
                <td>Male</td>
                <td>Newark, NJ</td>
              </tr>
              <tr>
                <td>Nancy Smith</td>
                <td>34</td>
                <td>Female</td>
                <td>Atlanta, GA</td>
              </tr>
            </tbody>
          </table>
        <hr>
  
        <h4>Form:</h4>
          <form>
              <div class="row">
                <div class="six columns">
                  <label for="exampleEmailInput">Enter email</label>
                  <input class="full-width" type="email" placeholder="myemail@gmail.com" id="exampleEmailInput">
                </div>
                <div class="six columns">
                  <label for="exampleRecipientInput">How can I help you?</label>
                  <select class="full-width" id="exampleRecipientInput">
                    <option value="Option 1">Questions</option>
                    <option value="Option 2">Option</option>
                    <option value="Option 3">Another Option</option>
                  </select>
                </div>
              </div>
              <label for="exampleMessage">Message</label>
              <textarea class="full-width" placeholder="Hi friend," id="exampleMessage">
              </textarea>
              <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Send a copy to yourself?</span>
              </label>
              <input class="button" type="submit" value="Submit">
            </form>

            <hr>

            <h4>Column classes (<a href="getskeleton.com">Skeleton Grid</a>)</h4>

          <div class="row">
            <div class="six columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas cumque ipsam facere repellat minima hic rem error ex provident assumenda veritatis accusantium, voluptatibus, iusto facilis eos a quisquam dolorem eligendi.</div>

            <div class="six columns">Laborum eaque earum eum deleniti consequatur quidem harum, voluptate fugiat, ea, ducimus omnis, totam adipisci reprehenderit aut. Nostrum quis fugit modi, amet. Exercitationem similique sunt voluptatem magnam, aspernatur culpa sit.</div>
          </div>
<hr>
          <div class="row">
            <div class="four columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex enim vel nam est dolor excepturi iste possimus. Iusto dolorem ex repellat ullam dolorum vitae, tenetur, veniam aliquam dolore facilis reprehenderit.</div>
            <div class="four columns">Ullam, dicta nostrum ea iste magnam animi quae natus rerum veniam quo itaque perferendis illo qui accusantium temporibus dolorum dignissimos quaerat velit. Deleniti quisquam, laborum tenetur ea est eligendi illum.</div>
            <div class="four columns">Modi repellat perferendis dignissimos veniam rem error dolores minima impedit distinctio temporibus, deserunt possimus, praesentium et eum mollitia quae consequatur laboriosam asperiores vitae vero soluta fuga cumque provident. Laudantium, corporis?</div>
          </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
