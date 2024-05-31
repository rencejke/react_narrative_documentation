import React from "react";
import SpinnerFetching from "../../../../../../partials/spinners/SpinnerFetching";
import Markdown  from "react-markdown";
import remarkGfm from 'remark-gfm'

const CoverMain = ({ isLoading, isFetching, cover }) => {
  return (
    <main className="w-full pt-[70px]">
      <div className="container">
        <div className="content py-[100px] text-center">
          {isFetching && <SpinnerFetching />}

          <div className="cover_header text-center h-[100px] w-[200px] mx-auto text-[10px]">
          {isFetching && <SpinnerFetching />}
          {cover?.data.map((item, key) => (
            item.cover_is_active === 1 && (
              <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.cover_header}</Markdown>
            )
          ))}
          </div>
          <div className="mt-[5rem]">
          {isFetching && <SpinnerFetching />}
          {cover?.data.map((item, key) => (
            item.cover_is_active === 1 && (
              <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.cover_article}</Markdown>
            )
          ))}
          </div>
        </div>
      </div>
    </main>
  );
};

export default CoverMain
