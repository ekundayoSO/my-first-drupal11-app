import "./App.css";

// Create book variables
const img = "https://m.media-amazon.com/images/I/91Sy3S-198L._AC_UY218_.jpg";
const title = "The Lost Bookshop";
const author = "Evie Woods";

// Book object
const secondBook = {
  img: "https://m.media-amazon.com/images/I/91eIanmV7KL._AC_UY218_.jpg",
  title: "Demon Copperhead: A Novel",
  author: "Barbara Kingsolver",
};

// Books in array - Using Map
const books = [
  {
    img: "https://m.media-amazon.com/images/I/91lOIcyFBiL._AC_UY218_.jpg",
    title: "Hello Beautiful (Oprah's Book Club)",
    author: "Ann Napolitano",
    id: 1
  },
  {
    img: "https://m.media-amazon.com/images/I/817AHLpY16L._AC_UY218_.jpg",
    title: "Summer Island",
    author: " Kristin Hannah ",
    id: 2
  },
];

function App() {
  return (
    <div className="card">
      <h1>Amazon Books List</h1>
      {/* From book variables */}
      <Book img={img} title={title} author={author} />

      {/* From book object */}
      <Book
        img={secondBook.img}
        title={secondBook.title}
        author={secondBook.author}
      />
      <Book1 img={img} title={title} author={author} />
      <Book2 img={img} title={title} author={author} />

      {/* When the books are in array */}
      {books.map((book) => {
        const {img, title, author, id} = book;
        return (
          <div>
            <Book img={img} title={title} author={author} key={id}/>
          </div>
        );
      })}
    </div>
  );
}

const Book = (props) => {
  return (
    <div className="">
      <img src={props.img} />
      <h2> {props.title} </h2>
      <h4> {props.author} </h4>
    </div>
  );
};

// Passing the props by destructuring
const Book1 = (props) => {
  const { img, title, author } = props;
  return (
    <div>
      <img src={img} />
      <h2> {title} </h2>
      <h4> {author} </h4>
    </div>
  );
};

// Passing the props-properties directly
const Book2 = ({ img, title, author }) => {
  return (
    <div>
      <img src={img} />
      <h2> {title} </h2>
      <h4> {author} </h4>
    </div>
  );
};

export default App;
