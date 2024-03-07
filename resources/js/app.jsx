import './bootstrap';
// import 'Code.jsx';

import React from "react";
import Saludo from "./Pages/Saludo.jsx";

import {createRoot} from "react-dom/client";

const main_element = document.getElementById("root")
console.log(main_element);


const root = createRoot(main_element);

root.render(<Saludo />);








