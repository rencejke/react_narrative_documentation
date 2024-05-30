import React from "react";
import SpinnerFetching from "../../../../../../partials/spinners/SpinnerFetching";
import Markdown  from "react-markdown";
import remarkGfm from 'remark-gfm'

const IntroMain = ({ isLoading, isFetching, intro }) => {
  return (
    <main className="w-full pt-[70px]">
      <div className="container">
        <div className="content py-[100px]">
          {isFetching && <SpinnerFetching />}
          {intro?.data.map((item, key) => (
            item.intro_is_active === 1 && (
              <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.intro_article}</Markdown>
            )
          ))}
        </div>
      </div>
    </main>
  );
};

export default IntroMain
