import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Login from "./components/pages/developer/access/Login";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import { StoreProvider } from "./store/StoreContext";
import ProtectedRoute from "./components/pages/developer/access/ProtectedRoute";
import Portfolio from "./components/pages/developer/dashboard/portfolio/Portfolio";
import Users from "./components/pages/developer/dashboard/user/Users";
import Introduction from "./components/pages/developer/dashboard/Introduction/Introduction";
import Home from "./components/pages/developer/ui/pages/frontend/Home";
import UIIntroduction from "./components/pages/developer/ui/pages/frontend/Introduction/UIIntroduction";
import UICover from "./components/pages/developer/ui/pages/frontend/Cover/UICover";
import Cover from "./components/pages/developer/dashboard/cover/Cover";
import Weeks from "./components/pages/developer/dashboard/weeks/Weeks";
import UIWeeks from "./components/pages/developer/ui/pages/frontend/Weeks/UIWeeks";
import UIPictures from "./components/pages/developer/ui/pages/frontend/pictures/UIPictures";
import Pictures from "./components/pages/developer/dashboard/pictures/Pictures";
import Code from "./components/pages/developer/dashboard/code/Code";
import UICode from "./components/pages/developer/ui/pages/frontend/code/UICode";

function App() {

  const queryClient = new QueryClient
  return (
    <>
    <QueryClientProvider client={queryClient}>
    <StoreProvider>
      <Router>
      <Routes>
        <Route path="/home" element={<Home />} />
        <Route path="/login" element={<Login />} />
        <Route path="/dashboard/portfolio" element={<ProtectedRoute><Portfolio /></ProtectedRoute>} />
        <Route path="/dashboard/users" element={<ProtectedRoute><Users /></ProtectedRoute>} />
        <Route path="/dashboard/introduction" element={<ProtectedRoute><Introduction/></ProtectedRoute>} /> 
        <Route path="/dashboard/cover" element={<ProtectedRoute><Cover/></ProtectedRoute>} /> 
        <Route path="/dashboard/weeks" element={<ProtectedRoute><Weeks/></ProtectedRoute>} /> 
        <Route path="/dashboard/pictures" element={<ProtectedRoute><Pictures/></ProtectedRoute>} /> 
        <Route path="/dashboard/code" element={<ProtectedRoute><Code/></ProtectedRoute>} /> 


        

        <Route path="/weeks" element={<ProtectedRoute><UIWeeks/></ProtectedRoute>} /> 
        <Route path="/introduction" element={<UIIntroduction/>} />
        <Route path="/pictures" element={<UIPictures/>} />
        <Route path="/cover" element={<UICover/>} />
        <Route path="/code" element={<UICode/>} />
        <Route path="*" element={<h2>Not Found</h2>} />
      </Routes>
    </Router>
    </StoreProvider>
    </QueryClientProvider>
    </>
  );
}
export default App;