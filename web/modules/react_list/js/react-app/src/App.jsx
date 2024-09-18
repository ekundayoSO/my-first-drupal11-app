import React, { useEffect, useState } from "react";
import Frontend from "./Frontend";

const App = () => {
  const [nodes, setNodes] = useState([]);

  useEffect(() => {
    fetch("/jsonapi/node/article")
      .then((response) => response.json())
      .then((data) => setNodes(data.data));
  }, [data]);

  return (
    <div>
      <h1>Article List</h1>
      <ul>
        {nodes.map((node) => (
          <li key={node.id}>{node.attributes.title}</li>
        ))}
      </ul>
      <Frontend nodes={nodes} />
    </div>
  );
};

export default App;
