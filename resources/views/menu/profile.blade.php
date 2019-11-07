@extends('layouts.master')
@section('content')
<h1 style="color:blue;">Your task is to create html page contain below article; along with the exact formatting.</h1>
<dl>
    <dt><b>HTML & CSS</b></dt>
    <dd>
        <a href="http://www.w3.org">HTML</a> (the Hypertext Markup Language) and <a href="http://www.w3.org">CSS</a> (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure  of the page, CSS the (visual
        and aural) layout, for a variety of devices. Along with <a href="http://www.w3.org">graphics</a> and <a href="http://www.w3.org">scripting</a>, HTML and CSS are the basis of building Web pages and Web Applications. Learn more below about:
    </dd>
</dl>


<b>What is HTML?</b>
<p><a href="http://www.w3.org">HTML</a> is the language for describing the structure of Web pages. HTML gives authors the means to:</p>
<ul>
    <li>Publish online documents with headings, text, tables, lists, photos, etc.</li>
    <li>Retrieve online information via hypertext links, at the click of a button.</li>
    <li>Design forms for conducting transactions with remote services, for use in searching for information, making reservations, ordering products, etc</li>
    <li>Include spread-sheets, video clips, sound clips, and other applications directly in their documents.</li>
</ul>
<p>With HTML, authors describe the structure of pages using markup. The elements of the language label pieces of content such as “paragraph,” “list,” “table,” and so on.
</p>


<b>What is XHTML?</b>
<p>XHTML is a variant of HTML that uses the syntax of <a href="http://www.w3.org">XML</a>, the Extensible Markup Language. XHTML has all the same elements (for paragraphs, etc.) as the HTML variant, but the syntax is slightly different. Because XHTML is
    an XML application, you can use other XML tools with it (such as <a href="http://www.w3.org">XSLT</a>, a language for transforming XML content).</p>


<b>What is CSS?</b>
<p><a href="http://www.w3.org">CSS</a> is the language for describing the presentation of Web pages, including colors, layout, and fonts. It allows one to adapt the presentation to different types of devices, such as large screens, small screens, or printers.
    CSS is independent of HTML and can be used with any XML-based markup language. The separation of HTML from CSS makes it easier to maintain sites, share style sheets across pages, and tailor pages to different environments. This is referred to as the separation
    of structure (or: content) from presentation.</p>

<b>What is WebFonts?</b>
<p>WebFonts is a technology that enables people to use fonts on demand over the Web without requiring installation in the operating system. W3C has experience in downloadable fonts through HTML, CSS2, and SVG. Until recently, downloadable fonts have not
    been common on the Web due to the lack of an interoperable font format. The WebFonts effort plans to address that through the creation of an industry-supported, open font format for the Web (called "WOFF").</p>


<b>Brief History of HTML</b>
<p>In the late 1980's, a physicist, Tim Berners-Lee who was a contractor at CERN, proposed a system for CERN researchers. In 1989, he wrote a memo proposing an internet-based hypertext system.<b>Tim Berners-Lee</b> is known as the father of HTML. The first
    available description of HTML was a document called "HTML Tags" proposed by Tim in late 1991. The latest version of HTML is HTML5, which we will learn later in this tutorial.</p>


<b>HTML Versions</b>
<p>Since the time HTML was invented there are lots of HTML versions in market, the brief introduction about the HTML version is given below:</p>

<p><b>HTML 1.0: </b>The first version of HTML was 1.0, which was the barebones version of HTML language, and it was released in1991.</p>
<p><b>HTML 2.0: </b>This was the next version which was released in 1995, and it was standard language version for website design. HTML 2.0 was able to support extra features such as form-based file upload, form elements such as text box, option button,
    etc.
</p>
<p><b>HTML 3.2: </b>HTML 3.2 version was published by W3C in early 1997. This version was capable of creating tables and providing support for extra options for form elements. It can also support a web page with complex mathematical equations. It became
    an official standard for any browser till January 1997. Today it is practically supported by most of the browsers.
</p>
<p><b>HTML 4.01: </b>HTML 4.01 version was released on December 1999, and it is a very stable version of HTML language. This version is the current official standard, and it provides added support for stylesheets (CSS) and scripting ability for various multimedia
    elements.
</p>
<p><b>HTML5: </b>HTML5 is the newest version of HyperText Markup language. The first draft of this version was announced in January 2008. There are two major organizations one is W3C (World Wide Web Consortium), and another one is WHATWG (Web Hypertext Application
    Technology Working Group) which are involved in the development of HTML 5 version, and still, it is under development.</p>


<h5></h5>
<p>The following very simple example of a portion of an HTML document illustrates how to create a link within a paragraph. When rendered on the screen (or by a speech synthesizer), the link text will be “final report”; when somebody activates the link, the
    browser will retrieve the resource identified by “<a href="http://www.example.com/report">http://www.example.com/report</a>”:</p>
<pre><p> &lt;p class="moreinfo"&gt; For more information see the<br /></pre>
<pre>&lt;a href="http://www.example.com/report"&gt;final report&lt;/a&gt;&lt;/p&gt;</pre><br /> The class attribute on the paragraph's start tag (“&lt;p&gt;”) can be used, among other thing, to add style. For instance, to italicize the text of all paragraphs
with a class of “moreinfo,” one could write, in CSS:<br />
<pre>p.moreinfo { font-style: italic }</pre><br /> By placing that rule in a separate file, the style may be shared by any number of HTML documents.
</p>

<br />
<p>Points about Html:<br />
    <ul>
        <li>HTML is used to create webpages.</li>
        <li>HTML used many tags to make a webpage. So, it is a tag-based language.</li>
        <li>The tags of HTML are surrounded by angular bracket.</li>
        <li>It can use wide ranges of colors, objects and layouts.</li>
        <li>Very useful for beginners in web designing field.</li>
    </ul>
</p>

<p>Advantages of HTML:<br />
    <ul>
        <li>First advantage it is widely used.</li>
        <li>Every browser supports HTML language.</li>
        <li>Easy to learn and use.</li>
        <li>It is by default in every window so you don't need to purchase extra software.</li>
    </ul>
</p>

<p>Disadvantages of HTML:<br />
    <ul>
        <li>It can create only static and plain pages so if we need dynamic pages then HTML is not useful.</li>
        <li>Need to write lot of code for making simple webpage.</li>
        <li>Security features are not good in HTML.</li>
        <li>If we need to write long code for making a webpage then it produces some complexity.</li>
    </ul>
</p>
<fieldset>
    <select name="product" multiple="multiple">
        <option value="value 1" selected="selected">keyboard</option>
        <option value="value 1">mouse</option>
        <option value="value 1">monitor</option>
    </select>
</fieldset>
<br />
<a href="{{url('/')}}">Back</a>
@endsection