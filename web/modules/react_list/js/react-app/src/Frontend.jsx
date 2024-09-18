import React from "react";

const Frontend = ({nodes}) => {
  return (
    <div>
      <h1>Article List</h1>
      <ul>
        {nodes.map((node) => (
          <li key={node.id}>{node.attributes.title}</li>
        ))}
      </ul>
    </div>
  );
}
export default Frontend;