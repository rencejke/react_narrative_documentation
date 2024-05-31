import React from "react";
import SpinnerFetching from "../../../../../../partials/spinners/SpinnerFetching";
import Markdown  from "react-markdown";
import remarkGfm from 'remark-gfm';
import { useScroll, motion, useSpring } from "framer-motion"

const WeeksMain = ({ isLoading, isFetching, weeks }) => {
  const { scrollYProgress } = useScroll();

  const scaleX = useSpring(scrollYProgress, {
    stiffness: 100,
    damping: 30,
    restDelta: 0.001
  });

  

    
  return (
    
      <main className="w-full pt-[70px] relative"> 
         <motion.div className="progress-bar z-[9999]"  style={{ scaleX }}></motion.div>
      <div className="container ">
        <div className=" content py-[100px]">
  
          {isFetching && <SpinnerFetching />}
          {weeks?.data.map((item, key) => (
            item.weeks_is_active === 1 && (
              <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.weeks_article}</Markdown>
            )
          ))}
        </div>
      </div>
    </main>

  );
};

export default WeeksMain
