import React from "react";
import Nav from "../../homepage/Nav";
import "./JavaScript.css";

export default function JavaScript() {
  return (
    <div>
      <Nav />
      <ul className="javascriptsidebar">
        <li>JavaScript Overview</li>
        <li>JavaScript Basics</li>
        <li>Installation</li>
      </ul>
    </div>
  );
}